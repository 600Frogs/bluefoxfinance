<?php 
$title = "Glossary of terms - Blue Fox Finance";
$description = "Please find herein a glossary and explanation of common terms used throughout the finance process.";
$pub_date = "06 January, 2018";
$author = "Zak Avery";
$feature_src = 'media/articles/glossary-feature.png';
$canonical = "https://bluefoxfinance.com.au/useful-information/glossary";
ob_start() ?>

<section class="main-content-area">
    <h1>Glossary</h1>
   <h2><strong><a id="balloon"></a>Balloon</strong></h2>
   <p>A balloon payment is common for car and equipment finance.  It is a large payment due at the end of the loan term.  People are usually happy with balloon payments because they are likely to trade-in or sell their car after the loan term, enabling to pay the balloon without stress.
    </p>
    <h2><strong><a id="bodycorporate"></a>Body Corporate</strong></h2>
    <p>Body Corporate is the common term for the body of members that oversee things like maintenance, insurance and upgrades on units and townhouses.  Body Corp fees/levies are generally charged to each property owner within the apartment building (or town house estate) quarterly.
    </p>
    <h2><strong><a id="collateral"></a>Collateral</strong></h2>
    <p>Something pledged as <a href="<?php echo $config['URL'] . 'useful-information/glossary.php/#security' ?>" target="_blank">security</a> for repayment of a loan, to be forfeited in the event of a <a href="<?php echo $config['URL'] . 'useful-information/glossary.php/#default' ?>" target="_blank">default</a>.
    </p>

    <h2><strong><a id="conveyancer"></a>Conveyancer</strong></h2>
    <p>A solicitor or representative responsible for preparing various documents and arranging settlement.
    </p>
    
    <h2><strong><a id="credithistory"></a>Credit History</strong></h2>
    <p>A record of all your Credit Card and loan inquiries, defaults and court judgments resulting from unpaid loans.
    </p>
    
    <h2><strong><a id="default"></a>Default</strong></h2>
    <p>When a borrower does not make their repayments on time, they are said to be overdue or in arrears.  If the payments are overdue for 2 months or more, the lender will send out a notice of default, and record it on your credit file.
    </p>
    
    <h2><strong><a id="equity"></a>Equity</strong></h2>
    <p>The difference between the value of a property and the loan against it.  If I own property worth $400,000, but have a loan against it worth $300,000, then I have $100,000 in equity.
    </p>

    <h2><strong><a id="interestonly"></a>Interest-Only</strong></h2>
    <p>The lender generally will calculate interest daily, and add it to the loan account monthly.  If you have an interest-only loan, you need only repay this amount and none of the "<?php echo $config['URL'] . 'useful-information/glossary.php/#principle' ?>" target="_blank">principle</a>.
    </p>
    
    <h2><strong><a id="lender"></a>Lender</strong></h2>
    <p>An umbrella term for banks, building societies, credit unions and non-banks.
    </p>

    <h2><strong><a id="lmi"></a>LMI or Lender's Mortgage Insurance</strong></h2>
    </strong></h2>
    <p>LMI is an insurance taken out by banks to protect themselves in case the borrower <a href="<?php echo $config['URL'] . 'useful-information/glossary.php/#default' ?>">defaults</a>.  LMI is often used as a reference to the once off insurance premium the borrower needs to pay when using a deposit smaller than 20% of the purchase price.  LMI does not protect the borrower.
    </p>
    <h2><strong><a id="lvr"></a>LVR</strong></h2>
    <p>LVR or the Loan-to-Value Ratio is the total loan amount divided by the value of the <a href="<?php echo $config['URL'] . 'useful-information/glossary.php/#security' ?>" target="_blank">security</a>.
    </p>;
    <h2><strong><a id="nonbank"></a>Non-Bank</strong></h2>
    <p>Used to describe a <a href="<?php echo $config['URL'] . 'useful-information/glossary.php/#security' ?>" target="_blank">lender</a> that doesn’t have its banking licence.  There are many non-banks that do home loans and car finance.
    </p>
    <h2><strong><a id="principle"></a>Principle</strong></h2>
    <p>The amount owing on a property.
    </p>
    <h2><strong><a id="security"></a>Security</strong></h2>
    <p>A home loan is “secured” by house, therefore the house is known as the security.  When a house or car is used as security for a loan, the lender may repossess the security if the borrower <a href="<?php echo $config['URL'] . 'useful-information/glossary.php/#default' ?>" target="_blank">defaults</a>.
    </p>
    <h2><strong><a id="split"></a>Split</strong></h2>
    <p>A home loan can have multiple splits, which can be described as sub-accounts of the home loan.
    </p>
    <h2><strong><a id="standaloneloan"></a>Stand-Alone Loan</strong></h2>
    <p>A loan with only one <a href="<?php echo $config['URL'] . 'useful-information/glossary.php/#security' ?>" target="_blank">security</a>.
    </p>
    <h2><strong><a id="term"></a>Term</strong></h2>
    <p>The length of a loan i.e. a term of 30 years.
    </p>
</section>
    
<?php $content = ob_get_clean() ?>

<?php require "article-layout.php" ?>
