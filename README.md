# **TFactor and Martingale bet strategy** 

## Table of Contents

- [About Martingale](#about_martingale)
- [About TFactor](#about_tfactor)
- [TFactor example](#example)
- [History case](#case)
- [Contributing](#contributing)

## About Martingale <a name = "about_martingale"></a>

A Martingale is a class of betting strategies that originated from and were popular in 18th-century France. The simplest of these strategies was designed for a game in which the gambler wins the stake if a coin comes up heads and loses if it comes up tails. The strategy had the gambler double the bet after every loss, so that the first win would recover all previous losses plus win a profit equal to the original stake.

## About TFactor <a name = "about_tfactor"></a>

In order to apply the martingale progression we have to double the bet with each loss, the worst case is the consecutive bets on the losing color. In this case we are helped by the TFactor (or simply, Factor T) it represent the maximum number of possible losing attempts with a certain capital: the higher the T, the more chance we have of recovering the amount in loss that is generated when we lose more than once.

## TFactor example <a name = "example"></a>

```
===============================
tbal: Total balance
fiche: Fiche used in current try
t: Current try count or TFactor
===============================

tbal = 40,   fiche = 0.1, t = 1
tbal = 39.9, fiche = 0.2, t = 2
tbal = 39.7, fiche = 0.4, t = 3
tbal = 39.3, fiche = 0.8, t = 4
tbal = 38.5, fiche = 1.6, t = 5
tbal = 36.9, fiche = 3.2, t = 6
tbal = 33.7, fiche = 6.4, t = 7
tbal = 27.3, fiche = 12.8, t = 8
```

## Fun (or scary) case <a name = "case"></a>

_The longest recorded streak of one color in roulette in American casino history happened in 1943 when the color red won 32 consecutive times. In a row. The people convinced black had to hit next were absolutely f***ed up._

**And as you may have guessed, to cover a T factor of 32, you need a couple of state funds!**

## And to be precise, to reach that T:

```
tbal = 1000000000, fiche = 0.1, t = 1

[...]

tbal = 999999180.9, fiche = 819.2, t = 14
(Considering the maximum bet of the table which is usually 1000, we have a problem since the fourteenth attempt)

[...]

tbal = 785251635.3, fiche = 214748364.8, t = 32
tbal = 570503270.5, fiche = 429496729.6, t = 33
```


# Contributing <a name = "contributing"></a>

Anyone willing to collaborate on an algorithm that mitigates the effects of martingale progression, feel free to submit a pull request or comment on any part of this repository.