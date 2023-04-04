#include <iostream>
#include <string>

using std::cout; using  std::endl; using  std::cin; using std::string;

string replaceLetters(string str, int size);

void main()
{
	// init variables
	string strIn = string();
	string strOut = string();
	int szCounter = 0;
	int szStrIn = 0;

	// Prompt input...
	cout << "Please enter string to turn it uppercase: ";
	std::getline(cin, strIn);
	// strIn = "Hello World! I'll pay that doctrine or else die in dept. lorum ipsum.#";
	// strIn = "Hello World!#";

	// Get string length
	// int szStrIn = strIn.size();
	//     eol character       newline characher   "carriage return" sign
	while (strIn[szCounter] != '#')
		szCounter++;
	szStrIn = szCounter;

	// remove '#' char
	strIn[szStrIn] = '\0'; // end-of-line character

	// iter through string and replace any lowercase letter with uppercase one
	strOut = replaceLetters(strIn, szStrIn);

	// Output...
	cout << "Your string uppercase: " << endl;
	cout << strOut << endl;
}

string replaceLetters(string str, int size)
{
	// here we compare each input letter to lowercase
	// alphabet and if they match replace that letter
	// with uppercase equivalent
	const char uppers[] = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	const char lowers[] = "abcdefghijklmnopqrstuvwxyz";
	const int szLetters = 26;

	for (int i = 0; i < size; i++)
	{
		for (int j = 0; j < szLetters; j++)
			if (str[i] == lowers[j])
				str[i] = uppers[j];
	}

	return str;
}