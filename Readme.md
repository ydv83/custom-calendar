Callendar: calc.php

Test run command: ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/EmailTest

ask 1 - Custom calendar function

Write PHP function, which returns day of standard seven days week of imaginary calendar, assuming we know how often a leap year occurs, how many months it has and how many days it has in each month. Use function to find the day of date 17.11.2013.

Definition of calendar:

- each year has 13 months
- each even month has 21 days, each odd month has 22 days
- in leap year last month has less one day
- leap year is each year dividable by five without rest
- every week has 7 days: Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday
- first day of year 1990 was Monday  


Задача 1 - Создание кастомной календарной функции

Напишите PHP функцию, которая будет выводить день стандартной недели воображаемого календаря, учитывая что мы знаем насколько часто случается високосный год. Нужно рассчитать сколько месяцев в нём, а также сколько дней в каждом месяце. Используйте данную функцию чтобы найти в какой день будет данная дата - 17.11.2013

Характеристики для календаря:

Каждый год имеет 13 месяцев

Каждый месяц имеет 21 день, каждый нечётный месяц имеет 22 дня

Последний месяц високосного года имеет на один день меньше

Високосный год - каждый год, который делится на 5 без остатка

Каждая неделя состоит из 7 дней: Воскресенье, Понедельник, Вторник, Среда, Четверг, Пятница, Суббота

Первым днём 1990 года был Понедельник
