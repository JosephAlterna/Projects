World Traveler
Hello there, friend! We’re exhausted having just returned to New York City from a whirlwind of world travel. We’re bringing all our international currency to the bank to be exchanged for USD. Our travels have made us wise and weary, and we want to ensure we’re being treated fairly. Can you help?

Write a program to calculate exactly how much cash in USD we should end up with after it has all been exchanged.

Tasks
6/6 complete
Mark the tasks as complete by checking them off
Calculate Our Expected Amount of USD
1.
Create variables to hold the amount of each foreign currency we’ll be exchanging:

We had a blissful time at Lake Yeak Laom in Ratanakiri, Cambodia and ended up with 2103942 riel left in our pocket
We saw the best sunset of our lives in Hpa-an, Myanmar and left the country with 19092 kyat
We got our fill of fjords in Bergen, Norway and discovered 109 krones that went unspent
We soaked up the sun and history in Saranda, Albania and found 9094 lek scattered throughout our luggage when we arrived home to NYC
It makes sense to name the variables meaningfully. For example, we would create a variable $riel to hold the value 2103942.

2.
Use echo to print how much of each currency we started out with.

3.
Look up the exchange rate for each of those currencies. Save a variable for each exchange rate.

4.
For each currency, calculate the amount of USD it will be exchanged for and use echo to print this to the terminal.

5.
The currency exchange business takes a flat $1 fee per conversion. Calculate our final amount of USD and use echo to print it to the terminal.

6.
Thanks for your help! Consider exploring other currencies or changing your echo statements to make the program even more unique to you.

Are those extra decimals driving you crazy? There are lot’s of ways to get rid of them, including using language features you might not know, but there are some tricks to getting rid of them using mathematical operators (in particular modulo (%)). For an extra challenge, play around and see what you can do. You can check out the way we did it in the hint!

Here’s a sort of funny way that we came up with a rounded amount:

$dollars_only = $final_amount % 1000000000;

$change = $final_amount - $dollars_only;

$rounded_change = $change * 100;

$rounded_change %= 100;

$rounded_change /= 100;

$final_amount = $dollars_only + $rounded_change;

Copy to Clipboard

Let’s walk through the code above:

We first took the $final_amount and used modulo with a number we knew would be way too big. Since modulo always returns an integer, this gave us back the whole number with all the decimals removed.
We subtracted this amount ($dollars_only) from $final_amount to give us the entire decimal part of the number ($change).
We multiplied that by 100 and used our same modulo trick to create an integer number from the first and second decimal places.
Finally we divided by 100 to get them back in the right place.
With every coding problem, there are many ways to solve it!