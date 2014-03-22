HouseBoat
=========

Will I need a house or a boat for a home in the future?


### Introduction

This project is responsive website tool.

Its function is to allow someone to enter their postcode and be told whether they will need a house or a boat to live there in the future, based on height about sealevel  (defaults to 100 years)

Basic:
<form action="" method="post">
I live: <input type="text" id="postcode" name="postcode" placeholder="{enter postcode}" />



Advanced:

<select id="" name="">
<option value="">I am ...</option>
<option value="optimist">an optimist</option>
<option value="pessimist">a pessimist</option>
<option value="denial">a climate change denier</option>
</select>

I want to live here for <select id="years" name="years">
<option value="1">1 year</option>
<option value="10">10 years</option>
<option value="100" selected="selected">100 years</option>
<option value="1000">1000 years</option>
</select>
</form>

Factors considered in your housing solutions:

1) flooding - short-term weather conditions can . We make 

2) sea level rise - longer-term change to sea level, leading to potential of permanent dampness at your place of residence


Sea level rise is complicated, so this tool makes a few assumptions.

1) Future sea level rise is based on estimations, since it's not possible (yet) to know the future. Our estimation, up to 2100, is based on the <a href="http://www.ipcc.ch/pdf/unfccc/cop19/3_gregory13sbsta.pdf">results of modelling sea level rise</a>, as reported in the Intergovernmental Panel on Climate Change's <a href="http://www.climatechange2013.org/">Climate Change 2013 Report</a>.


Our estimations up to 1000 years in the future are based on <a href="http://www.pnas.org/content/early/2013/07/10/1219414110">Levermann et al.'s 2013 paper in PNAS</a>, predicts that 1°C of warming would result in a global sea level rise of 2.3m within 2000 years, with 2°C of warming 2°C leading to 4.8 m within 2000 years.

of warming over the next 2000 years is an often used optimistic goal. The pessimistic view of the temperature trend could see 4°C of warming over the next 2000 years.


Global sea-level rise in cm by the year 2100 as projected by the IPCC AR5. The values are relative to the mean over 1986-2005, so subtract about a centimetre to get numbers relative to the year 2000.

10 years:
+6cm
+15cm


100 years:
+28cm
+98cm

Most optimistic estimate is low end of IPCC's RCP2.6 model. Most pessimistic is high end of RCP8.5 model.
See more at: http://www.realclimate.org/index.php/archives/2013/10/sea-level-in-the-5th-ipcc-report/#sthash.ltcqZBm9.dpuf


1000 years:
+230cm
+480cm

Most optimistic estimate, from Levermann et al, is temperature change of 1°C over next century, leading to +230cm change. Most pessimistic is temperature change of 2°C over next century, leading to +480cm change.



2) The actual amount of sea level rise is different around the world. We assume that the rise for entire of UK is as predicted by IPCC for global trend. A fair assumption, as about 70% of the coastlines worldwide are projected to experience sea level change within 20% of the global mean sea level change
3) determining the effect of sea level rise on changes to UK coastline is complex, requiring more sophisticated modelling of terrain than we are going to attempt here. For context, using this method the current lowest point in the UK (Holme Fen, Huntingdonshire) would currently require a boat, being 3m below sea level.



Fact:

the largest contribution to sea level rise isn't melting ice caps, but thermal expansion of existing sea water.

On the low end, the range for the RCP2.6 scenario is 28-61 cm rise by 2100, with a best estimate of 44 cm. Now that is very remarkable, given that this is a scenario with drastic emissions reductions starting in a few years from now, with the world reaching zero emissions by 2070 and after that succeeding in active carbon dioxide removal from the atmosphere. Even so, the expected sea-level rise will be almost three times as large as that experienced over the 20th Century (17 cm). - See more at: http://www.realclimate.org/index.php/archives/2013/10/sea-level-in-the-5th-ipcc-report/#sthash.ltcqZBm9.dpuf


Stage 2:

Notification (email or txt) of impending flood, based on their location. Needs account for them to change their preferences. Use 