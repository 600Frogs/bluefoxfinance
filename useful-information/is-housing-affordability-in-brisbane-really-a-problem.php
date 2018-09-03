<?php 
$title = "Is Housing Affordability in Brisbane Really a Problem?";
$description = "Housing affordability in Brisbane is a hot topic of late. Here is a breakdown of the historical figures on house prices, income and mortgage repayments.";
$pub_date = "06 January, 2018";
$author = "Zak Avery";
$feature_src = 'media/articles/affordability-feature.png';
$canonical = "https://bluefoxfinance.com.au/useful-information/is-housing-affordability-in-brisbane-really-a-problem";
ob_start() ?>

    <h1>Is Housing Affordability in Brisbane Really a Problem?</h1>
    <p>Housing affordability in Brisbane is a hot topic of late, with prices at an all-time high and first home buyers requiring using their parents’ assistance more than ever before. Here’s the figures.</p>
    <h2>House Prices vs Gross Income</h2>
    <p>Based on information collected from <a href="http://www.econ.mq.edu.au/Econ_docs/research_papers2/2004_research_papers/Abelson_9_04.pdf">Peter Abelson and Demi Chung’s Paper on Housing Prices</a>, the <a href="http://www.abs.gov.au/AUSSTATS/abs@.nsf/second+level+view?ReadForm&amp;prodno=6416.0&amp;viewtitle=Residential%20Property%20Price%20Indexes:%20Eight%20Capital%20Cities~Dec%202016~Latest~21/03/2017&amp;&amp;tabname=Past%20Future%20Issues&amp;prodno=6416.0&amp;issue=Dec%202016&amp;num=&amp;view=&amp;">Australian Bureau of Statistics Residential Property Prices Indexes</a> and <a href="http://www.qgso.qld.gov.au/products/tables/average-weekly-earnings-qld-aus/index.php">The Queensland Governments Statistician’s Office Report</a>, a clear picture of the differences in household income and property prices since 1983 can be shown:
    <img src ="<?php echo $config['media'] . 'articles/Mean-House-Price-vs-Average-Weekly-Earnings.png'?>" alt="House affordability in Brisbane - Mean house price vs average weekly earnings">
    <p>Between 1993 and 2015, property prices have risen from $55,525 to $500,000 (+800.50%); whereas income has only risen from $319.60 to $1,453.50 (+354.79%). Simply put, property prices have risen at more than double the rate of income in this time frame.</p>
    <h2>Mortgage Repayments vs Gross Income</h2>
    <p>Based on historical lending rates published by <a href="http://www.rba.gov.au/statistics/tables/">The Reserve Bank of Australia</a>, a comparison of mortgage repayments on a home loan over 30 years, based on a lending value of 80% of the purchase price can also be shown:</p>
    <img src="<?php echo $config['media'] . 'articles/Mortgage-Repayments-vs-Average-Weekly-Earnings.png' ?>" alt ="Housing affordability in Brisbane - Mortgage Repayments vs Average Weekly Earnings">
    <p>The average mortgage repayments have increased from $109.40 per week, to $518.34 per week (+373.79%), compared with the before mentioned increase in income of 354.79%.  Mortgage repayments and income trend closely together due to the massive reductions in interest rates (and therefore mortgage repayments) over the years. Average standard variable interest rates for banks were 12.5% in 1983, compared with 5.4% in 2015, with a peak of 17% in 1989.</p>
    <p>This indicates that mortgage repayments may not be the current problem in housing affordability, as the increase in payments has risen proportionally to household income.</p>
    <h2>What about the deposit required?</h2>
    <p>Whilst there is no historical data readily available for the deposit required to purchase a property over the years, it would be safe to assume it correlates closely with the trends of House Prices vs Income.  Therefore it could be proposed that while income has increased by ~373.8%, the deposit could likely have increased by ~800%, making it harder than ever before to save for a deposit. This then is the likely cause of difficulty entering the property market.</p>
    <h3>So, what are the current options?</h3>
    <h4>Using the First Home Owners' Grant</h4>
    <p>You will generally need some savings in this case, but with a good savings history, culminating in a sufficient amount of capital, you can look at applying for a loan, and use the $20,000 First Home Owners’ Grant as your funds to complete the loan. Based on a purchase of $500,000, the FHOG amounts is almost your entire deposit!</p>
    <h4>Parents</h4>
    <p>Using the equity in a parent’s home is becoming a very popular method of getting into the market as deposits become harder to save. For a full explanation, please see <a href="<?php $config['URL'] . 'useful-information/how-a-guarantor-loan-works.php'?>">how a guarantor loan works</a>.</p>
    <h4>Savings</h4>
    <p>There are entry level houses available in the outer suburbs of Brisbane for around $350,000. In this case, you would need a 5% deposit ($17,500), and about $3,000 to cover additional costs; resulting in a total cost of $20,500 (For a full breakdown of costs, please <a href="<?php $config['URL'] . 'useful-information/the-cost-of-buying-a-house-in-queensland.php'?>">click here</a> or talk to a <a href='../../../'>Mortgage Broker</a>). It may be a little slow and painful, but saving $100 a week over 4 to 5 years will get you into your first home.</p>
<?php $content = ob_get_clean() ?>

<?php require "article-layout.php" ?>




