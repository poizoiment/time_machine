const Settings = {
  t: 0,
  tokens: 128,
}

// request to cohere xlarge model
const cohereReq = async prompt => {
    const modelSettings = JSON.stringify({
      model: "xlarge",
      prompt,
      max_tokens: 128, // Settings.tokens, // 128,
      temperature: 0.6, // Settings.t,     // 0.6,
      k: 0,
      p: 0.75
    })
  
    const reqBody = {
      method: "POST",
      mode: 'cors',
      headers: {
          "Authorization": "BEARER tQ66vCmA1fDa1WXabkZo7WlGrXmAEtCXrBCxxJRq",  // my API key
          "Content-Type": "application/json", 
          "Cohere-Version": "2021-11-08",   // model version
          // I added some headers to prevent CORS errors
          "Access-Control-Allow-Origin": "*",
          "Access-Control-Allow-Methods": "DELETE, POST, GET, OPTIONS",
          "Access-Control-Allow-Headers": "Content-Type, Authorization, X-Requested-With"
      },
      body: modelSettings,
      redirect: "follow"
    };
  
    // make request
    let response = await fetch("https://api.cohere.ai/generate", reqBody);
    // take JavaScript object from JSON
    response = response.json();
  
    return response;
  }

  const prediction = async prompt => {
    console.log(prompt)
    console.log(`Given temperature = ${Settings.t} and max tokens = ${Settings.tokens}`)
  
    const response = await cohereReq(prompt)
  
    // from response get generations (if response exists), from generations get first element (if generations exist), and from it get text (if theres is element exists)
    const text = response?.generations?.shift()?.text
  
    console.log(text)
    return text
  }

const handleQuestion = async () => {
    document.getElementById("splashscreen").hidden = false
    document.getElementById("output").innerHTML = await prediction(
        document.getElementById("input").value);
    document.getElementById("splashscreen").hidden = true
}

const updateTemp = () => {
  Settings.t = Number(document.getElementById("temperature").value).toFixed(1)
  document.getElementById("temp-out").innerText = Settings.t + ''
}

const main = () => {
    document.querySelector(".input-group button").addEventListener("click", handleQuestion)
    document.getElementById("input").addEventListener("keydown", e => {
        if (e.key == "Enter") {
            handleQuestion()
        }
    })
    document.getElementById("temperature").oninput = e => {
      updateTemp()
    }
    document.getElementById("tokens").oninput = e => {
      Settings.tokens = Number(document.getElementById("tokens").value).toFixed(0)
    }
    updateTemp()
}

main()