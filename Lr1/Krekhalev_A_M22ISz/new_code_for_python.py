"""Variant na python"""
def variant1():
    n_string = str(input("Vvedite stroky: "))
    if len(n_string) != 0:
        n_string = sorted(set(n_string),key=n_string.index)
        print(n_string)
    else:
        print("Stroka None")


def variant2():
    n_string = str(input("Vvedite stroky: "))
    if len(n_string) != 0:
        i = 0
        new_string = ""
        while i <= len(n_string):
            i += 1
            if n_string.count(n_string[i].lower()) == 1 or n_string.count(n_string[i].upper()) == 1:
               new_string = new_string + n_string[i]
        print(new_string)
    else:
        print("Stroka None")

number_string = int(input('Vvedite nomer varianta 1 or 2? '))
if number_string == 0 or number_string == 1:
    variant1()
elif number_string ==2:
    variant2()

