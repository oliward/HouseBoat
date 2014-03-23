HouseBoat
=========

Will I need a house or a boat for my home in the future?


### Introduction

This project is tool, to draw attention to the effects of climate changes.

It functions by allowing someone to enter their postcode and be told whether they will need a house or a boat to live there in the future, based on height above sea level and future prediction of sea level change.

This tool is a bit of fun, but should also be informational. A number of assumptions are made, and awareness of these helps educate people on climate change science, the evidence, certainly of what will happen in the future, and what we can do to change course


### Basic query

Take postcode, default to 100 years, assume pessimist.

Responses:

*denier*

"You'll probably be fine!"

*other*

Appropriate icon is displayed, for house or boat


*Additional info:*

Based on your location we calculated that you are {current elevation}m above/below sea level. In the year {projected year} the sea level will be {projected elevation} meters higher than currently. This means you will "be fine in your house" / "need a boat".

Worried about flooding or climate change? The MP for your local constituency of {area} is {name}. Click here to get in contact with them.


### Advanced query (available in dropdown)

I am ...
-an optimist
-a pessimist (default)
-a climate change denier

I want to live here for:
-1 year
-10 years
-100 years (default)
-1000 years


### Model

*10 years:*

+6cm (optimistic)
+15cm (pessimistic)


*100 years:*

+28cm
+98cm


*1000 years:
+50cm (half of 1.0m change over 2000 years, based on 1°C of warming over 2000 years)
+605cm (half of 12.1m change over 2000 years, based on 4°C of warming over 2000 years)



### To do

*Phase 1*

Improve informational content:
[ ] Get designer to design nice info-graphics
[ ] Get copywriter to write some nice works

*Phase 2*

[ ] Notification (email or txt) of impending flood, based on location
   - Postcode, where they live
   - Email (optional), for sending email notification
   - Mobile (optional), for sending txt notification
[ ] Ability for user to change their preferences. Account, or simple txt/email response, or code for one-time login?

*Phase 3*

[ ] Find source for historic flood data
[ ] Model flood, weather and elevation data to inform on future flood likelihood
