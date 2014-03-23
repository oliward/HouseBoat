HouseBoat
=========

Will I need a house or a boat for my home in the future?


### Introduction

This project is responsive website, to draw attention to the effects of climate changes.

It functions by allowing someone to enter their postcode and be told whether they will need a house or a boat to live there in the future, based on height about sea level and future prediction of sea level change.


### To do

*Phase 1*
Basic tool to inform: house or boat

1) Oli to create front-end (form, website, styling)
2) Calum to create JS required to:
-find elevation from postcode with Google Maps API
-work out, from our crude models, if they are above or below sea level at that time

*Phase 2*
Notification (email or txt) of impending flood, based on their location. Needs ability for them to change their preferences. Account, or simple txt/email response, or code for one-time login?

1) If we have time, allow users to get notifications if they are going to get flooded. We take:
-Postcode, where they live
-Email (optional), for sending email notification
-Mobile (optional), for sending txt notification



### Basic query

Take postcode, default to 100 years, assume pessimist.

Response:

*denier*

"You'll probably be fine!"

*other*

JS returns "house" or "boat" => appropriate icon is displayed

Additional info:

Based on your location we calculated that you are Xm above/below sea level. In the year Y the sea level will be Z meters higher than currently. This means you will "be fine in your house" / "need a boat".


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


*1000 years:*
+50cm (half of 1.0m change over 2000 years, based on 1°C of warming over 2000 years)
+605cm (half of 12.1m change over 2000 years, based on 4°C of warming over 2000 years)


### Information

This tool is a bit of fun, but should also be informational. A number of assumptions are made, and awareness of these