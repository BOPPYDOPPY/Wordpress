<?php get_header(); ?>

<!-- <div class="wrapper">
    <div class="pure-g">
        <div class="qm-sm-12-12 content-wrapper">


		</div>   
    </div>
</div> -->


<div class="wrapper">

    <div class="pure-g">

        <div class="qm-sm-12-12 content-wrapper">

            <div class="heading">

                <h1>Car tax calculator for Germany</h1>

                <h2>Car tax calculator for Germany</h2>

            </div>

    

            <div>

    <div class="pure-g">

        <div class="qm-sm-12-12">

            <div class="vehicle share-box-content">

                <div class="vehicle-list">
                

                    <a class="car-tax-calculator color active" href="car-tax-germany" >
                        <svg class="icon active"><use xlink:href="#car-tax-calculator" /></svg>
                        <div class="sub-text show-for-medium" title="Car Tax Calculator">Car</div>
                    </a>


                <a class="motorcycle-tax-calculator color" href="motorcycle-tax-germany" >
                        <svg class="icon"><use xlink:href="#motorcycle-tax-calculator" /></svg>
                        <div class="sub-text show-for-medium" title="Motorcycle Tax Calculator">Motorcycle</div>
                    </a>

                    

                    
                    

                    <a class="rv-tax-calculator color" href="camper-tax-germany" >
                        <svg class="icon"><use xlink:href="#rv-tax-calculator" /></svg>
                        <div class="sub-text show-for-medium" title="RV Tax Calculator">RV</div>
                    </a>

                    

                    
                    

                    <a class="caravan-tax-calculator color" href="carvan-tax-germany" >
                        <svg class="icon"><use xlink:href="#caravan-tax-calculator" /></svg>
                        <div class="sub-text show-for-medium" title="Caravan Tax Calculator">Caravan</div>
                    </a>

                    

                    
                    

                    <a class="truck-tax-calculator color" href="truck-tax-germany" >
                        <svg class="icon"><use xlink:href="#truck-tax-calculator" /></svg>
                        <div class="sub-text show-for-medium" title="Truck Tax Calculator">Truck</div>
                    </a>

                    

                    
                    

                    <a class="trailer-tax-calculator color" href="trailer-tax-germany" >
                        <svg class="icon"><use xlink:href="#trailer-tax-calculator" /></svg>
                        <div class="sub-text show-for-medium" title="Trailer Tax Calculator">Trailer</div>
                    </a>

                    

                    
                    

                    <a class="electric-car-tax-calculator color" href="electric-vehicle-tax-germany" >
                        <svg class="icon"><use xlink:href="#electric-car-tax-calculator" /></svg>
                        <div class="sub-text show-for-medium" title="Electric Tax Calculator">Electric</div>
                    </a>

                    

                    
                    

                    <a class="oldtimer-car-tax-calculator color" href="oldtimer-tax-germany" >
                        <svg class="icon"><use xlink:href="#oldtimer-car-tax-calculator" /></svg>
                        <div class="sub-text show-for-medium" title="Oldtimer Tax Calculator">Oldtimer</div>
                    </a>

                    

                </div>

            </div>

        </div>

    </div>

</div>




            

<label for="drop" class="toggle burger-icon"></label>
<input type="checkbox" id="drop">

<ul class="menu show-for-small-only">
    
    
    <li>
        <a href="https://kfz-steuer.wiki/en/car-tax-germany/">Car tax</a>
    </li>
    
    
    
    <li>
        <a href="https://kfz-steuer.wiki/en/motorcycle-tax-germany/">Motorcycle tax</a>
    </li>
    
    
    
    <li>
        <a href="https://kfz-steuer.wiki/en/camper-tax-germany/">RV tax</a>
    </li>
    
    
    
    <li>
        <a href="https://kfz-steuer.wiki/en/caravan-tax-germany/">Caravan tax</a>
    </li>
    
    
    
    <li>
        <a href="https://kfz-steuer.wiki/en/truck-tax-germany/">Truck Tax</a>
    </li>
    
    
    
    <li>
        <a href="https://kfz-steuer.wiki/en/trailer-tax-germany/">Trailer tax</a>
    </li>
    
    
    
    <li>
        <a href="https://kfz-steuer.wiki/en/electric-vehicle-tax-germany/">Electric car tax</a>
    </li>
    
    
    
    <li>
        <a href="https://kfz-steuer.wiki/en/oldtimer-tax-germany/">Oldtimer tax</a>
    </li>
    
    
</ul>




            <article>

                <div class="calculator-container pure-form pure-form-stacked">
    <div class="inner-calc">
        <div class="pure-g row">

            <div class="qm-md-6-12 qm-sm-12-12 p-r-10">
                <label class="tooltip">Date of first registration <sub>*</sub><span class="tooltiptext"><strong>Date of first registration (Erstzulassung - EZ)</strong><br>The date your vehicle was first registered. This information can be found on your permit certificate.</span></label>

                <select class="form-control qm-sm-12-12 jsCalcCarRegistrationSelect" name="engine-type">
                    <option value="">Please select</option>
                    <option value="a1">EZ before 30.06.2009</option>
                    <option value="a2">EZ 01.07.2009 till 31.12.2011</option>
                    <option value="a3">EZ 01.01.2012 till 31.12.2013</option>
                    <option value="a4">01.01.2014 till 31.12.2020</option>
                    <option value="a5">01.01.2021 and later</option>
                </select>
            </div>
            <div class="qm-md-6-12 qm-sm-12-12 p-l-10">
                <label class="tooltip">Engine capacity in ccm <sub>*</sub><span class="tooltiptext">Please enter your engine size. You can find this on your permit certificate (&quot;Zulassungsbescheinigung&quot;) under Part I, Section P.1.</span></label>
                <input class="qm-sm-12-12 numeric-input jsCalcCarDisplacementInput" type="number" name="displacement">
            </div>
        </div>

        <div class="pure-g row">
            <div class="qm-md-6-12 qm-sm-12-12 p-r-10">
                <label class="tooltip">Fuel type <sub>*</sub><span class="tooltiptext">Please select the fuel type of your vehicle.</span></label>
                <select class="form-control qm-sm-12-12 jsCalcCarEngineSelect" name="engine-type">
                    <option value="">Please select</option>
                    <option value="c1">Gasoline / Petrol / Wankel</option>
                    <option value="c2">Diesel engine</option>
                </select>
            </div>

            <div class="qm-md-6-12 qm-sm-12-12 p-l-10">
                <div class="jsCalcCarEmission" hidden>
                    <label class="tooltip">Emission class <sub>*</sub><span class="tooltiptext"><strong>Emission class</strong><br>Please select the emission class of your vehicle. You can find this information on your permit certificate under Part I, Section 14. For permits issued before 2005, this information can be found in section 1.</span></label>
                    <select class="form-control qm-sm-12-12 jsCalcCarEmissionSelect" name="emmision-class">
                        <option value="">Please select</option>
                        <option value="b1">Euro 3, D3 or better</option>
                        <option value="b2">Euro 2</option>
                        <option value="b3">Euro 1</option>
                        <option value="b4">Euro 0 (with permission while ozone warning)</option>
                        <option value="b5">all other</option>
                    </select>
                </div>
                <div class="jsCalcCarCo2" hidden>
                    <label class="tooltip">CO2 emissions in g/km <sub>*</sub><span class="tooltiptext">Please enter the CO2 emissions of your vehicle. This information can be found on your permit certificate (&quot;Zulassungsbescheinigung&quot;) under Part I, Section V.7.<br><br>Tax allowance deduction are as follows:<br>Vehicles registered 01 July 2009 - 31st December 2011: 120 g/km<br>Vehicles registered 01 January 2012 - 31st December 2013: 110 g/km<br>Vehicles registered after 01st January 2014: 95 g/km</span></label>
                    <input class="qm-sm-12-12 numeric-input jsCalcCarCo2Input" type="number" name="co2-emissions">
                </div>
            </div>
        </div>



        <div class="pure-g row">

            <div class="qm-md-6-12 qm-sm-12-12 p-r-10">
                <div class="pure-g">
                    <div class="qm-md-12-12 qm-sm-12-12">
                        <label class="tooltip">Registration period<span class="tooltiptext"><strong>Seasonal registration</strong><br>You may register your vehicle for less than 12 months. You can choose to register between 2 and 11 months. You are allowed to use your car on public roads during this period.</span></label>
                    </div>
                    <div class="button-group qm-sm-12-12 seasonbuttons" role="group">
                        <button class="button qm-sm-6-12 jsCalcCarStandardBtn button-active" type="submit" name="button_1">Standard</button>
                        <button class="button qm-sm-6-12 jsCalcCarSeasonalBtn" type="submit" name="button_2">Seasonal</button>
                    </div>
                </div>
            </div>


        </div>

        <div class="pure-g row jsCalcCarMonths" id="season-div" hidden>
            <div class="button-group qm-sm-6-12 qm-md-6-12 p-r-10" role="group">
                <label for="month_from">from</label>
                <select class="form-control qm-sm-12-12 jsCalcCarMonthsSelectFrom" name="month_from" id="month_from">
                    <option value="1" selected>January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">Mai</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                </select>
            </div>

            <div class="button-group qm-sm-6-12 qm-md-6-12 p-l-10" role="group">
                <label for="month_to">to</label>
                <select class="form-control qm-sm-12-12 jsCalcCarMonthsSelectTo" name="month_to" id="month_to">
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">Mai</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
        </div>
    </div>

    <div class="calculator-message jsCalcCarResult">
        <h2>Tax per year for this vehicle will be: </h2><span class="result_number jsCalcCarResultValue">0,00 €</span><h2></h2>
    </div>
</div>




<div id='div-gpt-ad-1614327210152-0'>
    <script>googletag.cmd.push(function() { googletag.display('div-gpt-ad-1614327210152-0'); });</script>
</div>








<p>&nbsp;</p>

<h2 id="car-tax-calculator-for-germany">Car tax calculator for Germany</h2>
<p>In order to be able to better plan the costs of your vehicle, it makes sense to calculate the car tax in advance. Our car tax calculator supports you in this and calculates immediately how much tax is due for your car. 
In the following you can find out which data you need to have at hand in order to use the calculator successfully. In addition, we offer an overview of vehicles that are exempt from tax or can be tax-privileged.</p>

<h2 id="the-new-procedure-for-calculating-vehicle-tax">The new procedure for calculating vehicle tax</h2>
<p>Since September 2018 in Germany and 2019 in Europe, the calculation of motor vehicle tax is based on data obtained by a globally harmonized test procedure for determining the values of pollutant and CO2 emissions, known as WLTP (Worldwide harmonized Light Duty Test Procedure). This more accurate calculation leads to an increase in taxes for some vehicles because higher emissions of greenhouse gases are determined. 
However, the new tax only applies to vehicles newly registered as of the cut-off date - September 1, 2018. For owners of older and used vehicles, nothing will change - the pollutant data already measured will continue to apply for the calculation of the motor vehicle tax.</p>

<h2 id="data-needed-for-using-the-vehicle-tax-calculator">Data needed for using the vehicle tax calculator</h2>
<p>All the data you need for determining the motor vehicle tax can be found in the registration certificate Part I (Zulassungsbescheinigung Teil I) or in the vehicle registration document. To make it easier for you to find the right data, you will find all the necessary information in a clearly arranged table, including the place where it is noted in the papers.</p>

<table class="pure-table">
<thead>
<tr>
<th width="30%">Data</th>
<th width="35%">Found here</th>
<th width="35%">Particularities</th>
</tr>
</thead>
<tbody>

<tr>
<td><strong>Carbon dioxide emissions/ Kohlendioxidausstoß</strong></td>
<td>V7 in the “Zulassungsbescheinigung Teil I”</td>
<td>This value is not noted in vehicle documents issued before 2009</td>
</tr>

<tr>
<td><strong>Gasoline or diesel engine / Benzinmotor oder Dieselmotor</strong></td>
<td>P3 in the “Zulassungsbescheinigung Teil I”, in the old “Fahrzeugschein” under point 5</td>
<td></td>
</tr>

<tr>
<td><strong>Cubic capacity / Hubraumgröße</strong></td>
<td>P1 in the “Zulassungsbescheinigung Teil I”, in the old “Fahrzeugschein” under point 8</td>
<td></td>
</tr>

<tr>
<td><strong>Date of first registration / Datum der Erstzulassung</strong></td>
<td>Point B in the “Zulassungsbescheinigung Teil I”, in the old “Fahrzeugschein” under point 32</td>
<td></td>
</tr>

</tbody>
</table>

<h2 id="relevant-factors-for-the-motor-vehicle-tax">Relevant factors for the motor vehicle tax</h2>
<p>The tax rate that applies to a passenger car is calculated on the basis of engine type, engine capacity and pollutant emissions. For each 100 cm ³ engine capacity or part thereof, owners of a car with a gasoline engine pay <span class="blue"><strong>2 €</strong></span>, those of a diesel vehicle <span class="blue"><strong>9.50 €</strong></span> in taxes. The emission of pollutants always depends on the first registration of a vehicle. All passenger cars registered before 2012 have a very high limit value and may emit up to 120 grams of carbon dioxide per kilometer. Cars registered after 2012 may not exceed the limit of 110 g/km. Since 2014, CO2 emissions must fall below 95 g/Km. Each gram that exceeds the limit results in a tax surcharge of <span class="blue"><strong>2 €</strong></span>.
For passenger vehicles (cars) with petrol and diesel engines, the tax is calculated per 100 cc or part thereof, depending on the pollutant emissions:</p>

<table class="pure-table">
<thead>
<tr>
<th width="60%">Emissions according to exhaust gas levels (“Abgasstufen”)</th>
<th width="20%">Petrol engine</th>
<th width="20%">Diesel engine</th>
</tr>
</thead>
<tbody>
<tr>
<td>Euro-3 or better (weight limit 2,5 t)</td>
<td class="blue"><strong>6.75 €</strong></td>
<td class="blue"><strong>15.44 €</strong></td>
</tr>
<tr>
<td>Euro 2</td>
<td class="blue"><strong>7.36 €</strong></td>
<td class="blue"><strong>16.05 €</strong></td>
</tr>
<tr>
<td>Euro 1</td>
<td class="blue"><strong>15.13 €</strong></td>
<td class="blue"><strong>27.35 €</strong></td>
</tr>
<tr>
<td>Euro-0 (formerly without ozone driving ban)</td>
<td class="blue"><strong>21.07 €</strong></td>
<td class="blue"><strong>33.29 €</strong></td>
</tr>
<tr>
<td>Euro-0 (all others)</td>
<td class="blue"><strong>25.36 €</strong></td>
<td class="blue"><strong>37.58 €</strong></td>
</tr>
</tbody>
</table>

<h2 id="who-pays-and-who-receives-the-motor-vehicle-tax">Who pays and who receives the motor vehicle tax?</h2>
<p>In Germany - with a few exceptions - every car owner has to pay taxes. This also applies to foreign cars that are in the country and exceed the tax-free period of one year. As a rule, the vehicle tax is paid by the owner of the vehicle. However, it is possible to specify another person liable to pay the tax in the tax form. For example, if the grandchild of a vehicle owner uses the car and is responsible for paying the taxes.</p>

<h2 id="the-exceptions---which-vehicles-are-tax-deductible">The exceptions - Which vehicles are tax deductible?</h2>

<p><strong>Tax exemptions are issued in some cases:</strong></p>
<ul>
  <li><strong>Electric car</strong><br />
<a href="/en/electric-vehicle-tax-germany/">Electric vehicles</a> registered for the first time between May 18, 2011 and December 31, 2015, have a ten year period free of taxes. From 2016 to 2020, the tax-free period will be reduced to five years. After this period has expired, owners of an electric car will still only have to pay 50% of the taxes.</li>
  <li><strong>Clean Diesel</strong><br />
There was a one-off tax relief for diesel vehicles with the Euro 6 emission class for cars registered for the first time between January 2011 and December 2013 and included a tax exemption of <span class="blue"><strong>150 €</strong></span>.</li>
  <li><strong>Oldtimer</strong><br />
Owners of registered <a href="/en/oldtimer-tax-germany/">Oldtimer cars pay a flat</a> rate of <span class="blue"><strong>191 €</strong></span> and <span class="blue"><strong>46 €</strong></span> for Oldtimer-motorcycles.</li>
  <li><strong>Cars of people with severe disabilities</strong><br />
Vehicle owners who have a severely disabled pass are exempt from motor vehicle tax. This applies to all those whose ID card contains the note “H”, “Bl” or “aG”.</li>
  <li><strong>Emergency vehicles</strong><br />
This applies, for example, to buses, fire engines, ambulances and police cars. Vehicles used for forestry are also generally not subject to tax.</li>
</ul>



            </article>

        </div>



    

    </div>

</div>




<?php get_footer(); ?>
