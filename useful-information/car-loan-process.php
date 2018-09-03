<?php 
$title = "The Car Loan Process Explained - Blue Fox Finance";
$description = "The Car Loan Process can be a mystery when buying your first car.  Herein has the information on how to get yourself a great deal and what questions to ask when applying for a car loan.";
$pub_date = "06 January, 2018";
$author = "Zak Avery";
$feature_src = 'media/articles/Car-Loan-Process-Feature.png';
$canonical = "https://bluefoxfinance.com.au/useful-information/car-loan-process";
ob_start() ?>

    <img src="<?php echo $config['media'] . 'articles/Car-Loan-Process-Feature.png' ?>" alt ="The Car Loan Process and how a car loan broker can help">
    <h1>The Car Loan Process Explained</h1>
    <p>
        Unless you’ve been through the car loan process, you may have no idea how to get a car loan, which may result in you paying extra fees and getting stuck with a higher interest rate than you could have.  I’m always available to help you through this process; however, I’ve written this article specifically to help you understand the process yourself.
    </p>
    <h2>Starting the car loan process...</h2>
    <h3>Can I get a pre-approval first?</h3>
    <p>
        Yes!  Most lenders will assess your situation and provide a free car loan pre-approval before you've even found which car you want.  This can give you a great idea of how much you can afford and give you confidence going forward.
    </p>
    <h2>Select your car and get a quote</h2>
    <p>
        This is the fun bit.  Go see a few dealers, find a car you like, and ask them for a written quote on the car and any extras you want.  At this point, it’s probably a good idea to ask your dealer for a quote on finance as well, but it’s important to ask the right questions:
        <ul>
            <li>What’s the interest rate?</li>
            <li>What fees are involved, upfront and ongoing?</li>
            <li>What are the monthly repayments?</li>
            <li>What is the loan <a href="<?php echo $config['URL'] . 'useful-information/glossary.php/#term' ?>" target="_blank">term</a>? (i.e. duration)</li>
            <li>What is the <a href="<?php echo $config['URL'] . 'useful-information/glossary.php/#balloon' ?>" target="_blank">balloon </a>payment?</li>
        </ul>
    </p>
    <h2>Talk to a Car Loan Broker</h2>
    <p>
        At this point you can shop around for a car loan a little.  Car Loan Brokers can generally find you a great deal and take the stress out of the application, but banks do car loans too.   Take your car and finance quote to whoever you choose to see if they can beat it, but be sure to ask the questions listed above.
    </p>
    <h2>Provide necessary documents</h2>
    <p>
        When you have decided on the car and your financier, they will ask you for your personal information and then walk you through what documents you will need to provide.  For most people, it will be as simple as: a Driver Licence, 2 recent payslips and the car quote.  Many lenders will also assess your car loan application and ask for the documents prior to settlement.
    </p>
    <h2>Await approval</h2>
    <p>
        Once your application has been sent off, some lenders will give you an approval/decline almost instantly, however many have a general turnaround time of 24 - 48 hours.
    </p>
    <h2>Sign your car loan agreement and await funding</h2>
    <p>
        Loan documents will be issued to your Finance Broker or financier with all the terms, conditions and repayments outlined.  Check these carefully and sign them when you feel comfortable.  Your dealer will also need to provide an invoice for the full amount at this point, so the bank may pay them promptly.  Whilst this process is usually very quick, some dealers can be less co-operative than others; however, it is a legal requirement that they provide the invoice within seven days of the request.
    </p>
    <h2>Pick up your new car!</h2> 
    <p>
        Enjoy your new car!
    </p>
<?php $content = ob_get_clean() ?>

<?php require "article-layout.php" ?>




