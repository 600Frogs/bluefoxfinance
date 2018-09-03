
<?php

function makeTableOf($title, $items) {
    $tableItems = '<table class="green-tick-table"><tbody><tr><th>'
            . $title
            . '</th></tr>';
    foreach($items as $item) {
        $tableItems .= '<tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>'
                  . $item
                  . '</td></tr></br>';
    }
    $tableItems .= '</tbody></table></div>';
    return $tableItems;
}


//Owner-Occupied Details

function OOrate() {
    return "3.59%";
}

function OOcomrate() {
    return "3.75%";
}

function OOdisclaimer() {
    return <<<EOT
            The information provided in this website is for general education purposes only and does not constitute specialist advice. It should not be relied upon for the purposes of entering into any legal or financial commitments. Specific investment advice should be obtained from a suitably qualified professional before adopting any investment strategy.  Whilst we aim to update our site frequently, interest rates change frequently, please contact us to confirm the latest offers.

*Note: the home loan with the lowest current interest rate is not necessarily the most suitable for your circumstances, you may not qualify for that particular product, and not all products are available in all states and territories. 

The comparison rate provided is based on a loan amount of $150,000 and a term of 25 years secured by an owner-occupied residential property. Warning: This Comparison Rate applies only to the example or examples given. Different amounts and terms will result in different Comparison Rates. Costs such as redraw fees or early repayment fees, and cost savings such as fee waivers, are not included in the Comparison Rate but may influence the cost of the loan.  Whilst we endevour to keep the information on this website up-to-date at all times, interest rates change daily - always confirm the current interest by calling 07 3354 4576 before making any decisions.
            
EOT;
}

function OOfeatureList($request = 'features') {
    $title = "Economy Variable Home Loan";
    if ($request === 'title') {
        return $title;
    };
    
    $features = array(
        'Up to 80% LVR',
        'Free redraw',
        'Principal & interest repayments',
        '$0 valuation fee'
    );
    return $features;
}

function OOfeatures() {
    return makeTableOf(OOfeatureList('title'), OOfeatureList());
}


//Investment Loan Details


function INVrate() {
    return "3.89%";
}

function INVcomrate() {
    return "3.91%";
}


function INVdisclaimer() {
    return <<<EOT
             The information provided in this website is for general education purposes only and does not constitute specialist advice. It should not be relied upon for the purposes of entering into any legal or financial commitments. Specific investment advice should be obtained from a suitably qualified professional before adopting any investment strategy.  Whilst we aim to update our site frequently, interest rates change frequently, please contact us to confirm the latest offers.
    *Note: the home loan with the lowest current interest rate is not necessarily the most suitable for your circumstances, you may not qualify for that particular product, and not all products are available in all states and territories. 

    The comparison rate provided is based on a loan amount of $150,000 and a term of 25 years secured by an investment residential property. Warning: This Comparison Rate applies only to the example or examples given. Different amounts and terms will result in different Comparison Rates. Costs such as redraw fees or early repayment fees, and cost savings such as fee waivers, are not included in the Comparison Rate but may influence the cost of the loan.  Whilst we endevour to keep the information on this website up-to-date at all times, interest rates change daily - always confirm the current interest by calling 07 3354 4576 before making any decisions.
       
EOT;
}

function INVfeatureList($request = 'features') {
    $title = "Offset Home Loan - Investment P&I Special";
    if ($request === 'title') {
        return $title;
    };
    
    $features = array(
        'Offset available',
        'Application fee waived',
        'Rate available at 70% LVR',
        '$0 valuation fee'
    );
    return $features;
}

function INVfeatures() {
    return makeTableOf(INVfeatureList('title'), INVfeatureList());
}

//Car Loan Details


function CARrate() {
    return "7.25%";
}

function CARcomrate() {
    return "9.05%";
}


function CARDisclaimer() {
    return <<<EOT
             The information provided in this website is for general education purposes only and does not constitute specialist advice. It should not be relied upon for the purposes of entering into any legal or financial commitments. Specific investment advice should be obtained from a suitably qualified professional before adopting any investment strategy.  Whilst we aim to update our site frequently, interest rates change frequently, please contact us to confirm the latest offers.    *The interest rate is available to approved applicants financing a motor vehicle on a secured consumer fixed rate loan over 60 months. The comparison rate is  based on a 5 year secured fixed rate loan of $30,000. WARNING: This comparison rate is true only for the examples given and may not include all fees and charges. Different terms, fees or other loan amounts might result in a different comparison rate. Applications for finance are subject to normal credit assessment. Conditions, fees & charges apply.  Whilst we endevour to keep the information on this website up-to-date at all times, interest rates change daily - always confirm the current interest by calling 07 3354 4576 before making any decisions.

            
EOT;
}


//Personal Loan Details


function PLrate() {
    return "7.95%";
}

function PLcomrate() {
    return "9.56%";
}


function PLdisclaimer() {
    return <<<EOT
             The information provided in this website is for general education purposes only and does not constitute specialist advice. It should not be relied upon for the purposes of entering into any legal or financial commitments. Specific investment advice should be obtained from a suitably qualified professional before adopting any investment strategy.  Whilst we aim to update our site frequently, interest rates change frequently, please contact us to confirm the latest offers.    *The interest rate is available to approved applicants getting a fixed rate personal loan over 60 months. The comparison rate is  based on a 5 year secured fixed rate loan of $30,000. WARNING: This comparison rate is true only for the examples given and may not include all fees and charges. Different terms, fees or other loan amounts might result in a different comparison rate. Applications for finance are subject to normal credit assessment. Brokerage not included.  Conditions, fees & charges apply.            
EOT;
}


?>