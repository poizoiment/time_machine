var l,total:integer;
    characters:string;
    current:char;
begin
    writeln('Введи текст');
    readln(characters);
    writeln('Введи символ');
    readln(current);
    begin
      total:=0;
      for l:=1 to length(characters) do 
      if current=characters[l] then total:=total+1;
      if total<>0 then 
         writeln('Данных символов ', total)
      else 
         writeln('Данных символов нет');
    end;
end.
