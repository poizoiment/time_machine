#include <iostream>
#include <stdlib.h>

using namespace std;

int strlen_my(string s)//Вспомогательная функция определения количества символов в строке
{
    int i = 0;// Счетчик символов в строке
    while(s[i] != '\0')// Если значение элемента не равно символу окончания строки
    {
        ++i;// Увеличиваем счетчик на 1
    }
    return i;// Возвращаем результат
}
int main()
{
    string firstWord, secondWord, finalWord;// Объявляем строковые переменные
    cout << "Enter the words: " << endl;
    cin >> firstWord >> secondWord;// Принимаем значения
    for(int i=0;i<=strlen_my(firstWord);i++){// Обходим первое слово
        int isEqual = 0;// Переменная принимает 1 если буквы равны при переборе второго слова
        for(int j=0;j<=strlen_my(secondWord);j++){// Обходим второе слово
            if(firstWord[i] == secondWord[j])// Если буквы равны
                isEqual = 1;// Устанавливаем переменной значение 1 
        }
        if(isEqual == 0)// Если isEqual равно нулю, в текущей итерации ни одна буква не совпала
            finalWord += firstWord[i];// Поэтому добавляем её в выходную переменную
    }
    cout << finalWord << endl;// Выводим результат
    cin >> firstWord;
    return 0;
}
