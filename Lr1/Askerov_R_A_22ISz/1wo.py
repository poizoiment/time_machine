
firstWord = input('Введите первое слово: ')
secondWord = input('Введите второе слово: ')
finalWord = ''

def str_length():
    pass

for i in firstWord:
    having = False
    for j in secondWord:
        if(i == j):
            having = True
    if(not having):
        finalWord += i

input(finalWord)