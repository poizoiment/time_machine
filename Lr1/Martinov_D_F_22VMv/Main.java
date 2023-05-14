/*Задана строка, содержащая буквы и цифры. Какова максимальная длина последовательности из цифр, идущих подряд.*/

import java.util.Scanner;
public class Main {
    public static void main(String[] args) {

        System.out.println("Введите строку для анализа");       // Просим ввести строку в консоль
        Scanner in = new Scanner(System.in);                    // запускаем сканер
        String InputString = in.nextLine();                     // Считываем строку из консоли
        int MaxString = 0;                                      // создаем переменную под максимальную последовательность чисел
        int TempMaxString = 0;                                 // создаем переменную под временное хранение максимальной последовательности
         for (int i = 0; i < InputString.length(); ++i ) {     //Проходимся циклом по массиву. Выходом из цикла будет длина строки определнная методом .length()
            if (Character.isDigit(InputString.charAt(i))) {    //Метод Character.isDigit() – определяет, является ли указанное значение типа char цифрой. А методом .charAt вытаскиваем из строки конкретный символ
            TempMaxString++;                                  // если это  число то прибавляем к  временной переменной
            } else {
                if (TempMaxString > MaxString ) {             //если это не число, то запускаем проверку  что больше
                    MaxString = TempMaxString;
                    TempMaxString = 0;
                } TempMaxString = 0;
              }
            if ( TempMaxString > MaxString ) {                 // дополнительная проверка после цикла на выявление большего числа
                MaxString = TempMaxString;
            }
        }
        System.out.println("Максимальная длина последовательности : " + MaxString +" цифр");

    }
}