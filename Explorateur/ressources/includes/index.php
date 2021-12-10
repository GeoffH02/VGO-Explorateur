<?php include('../includes/dbh.php');
include('../includes/cookieconnect.php');
$userid = $_SESSION["userId"];
$getCurrency = $conn->prepare("SELECT * FROM users WHERE id= :userid");
$getCurrency->execute(array(
    'userid' => $userid
));
$nowCurrency = $getCurrency->fetchAll();
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="refer.css" rel="stylesheet">
    <?php include('../includes/header.php'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>


<body onload="typeWriter();move();">
    <?php include('../includes/topbar.php'); ?>
    


    <div class="margin-block row rowRefer backgroundImage">
        <div class="col-lg-6">
            <div class="refer">
                <p class="textAllignCenter textWhiteColor titleRefer referalName" id="referal"></p>
            </div>
            <div class="textAllignCenter">
                <p class="invite" id="invite"></p>
                <p class="winner" id="winner"></p>
            </div>
        </div>
        <div class="col-lg-6 flex-allign">
            <div class="col-lg-6 bg-refer">
                <div class="margin-box-refer ">
                    <p class="marg-div-refer font-bold">Referal ID</p>
                    <a href="#" onclick="CopyToClipboard('idRefer')" ; id="idRefer" class="blackNuanced link font-refer-nmb"><?php echo $nowCurrency[0]['your_referal_code']; ?> <a href="#"><i class="far fa-copy boxSocial"></i></a>
                </div>
                <div class="marg-ontop">
                    <p class="marg-div-refer font-bold">Referal link</p>
                    <a href="#" onclick="copyToClipboard()" ; class="blackNuanced link">https://virgo.network/login/index.php?referal=<?php echo $nowCurrency[0]['your_referal_code']; ?> <i class="far fa-copy boxSocial"></i></a>
                </div>
                <div class="col-lg-12 box-percentages">
                    <p class="blackNuanced marg-div-refer link">REWARD PER REGISTER</p>
                    <div class="col-lg-6 displayInline width-49">
                        <p class="marg-div-refer font-bold">YOU</p>
                        <p class="font-bold percentageGet">20%</p>
                    </div>
                    <div class="col-lg-6 displayInline width-49">
                        <p class="marg-div-refer marg-div-refer font-bold">AFFILEE </p>
                        <p class="font-bold percentageGet">20%</p>
                    </div>
                </div>
                <p class="pallier">NEXT REWARD : <br> <span class="font-bold VirgoColor">XX VGO</span></p>
                <div class="progress">
                    <div class="progress-bar bg-danger backgroundImage" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="myBar">0%</div>
                </div>
                <p class="nextReward">NEXT PROMOTION : <br> <span class="font-bold VirgoColor">XX VGO</span></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4"></div>
    </div>

    <div class="margin-block row ">
        <div class="col-lg-7 marginauto">
            <h2 class="parrain VirgoColor textAllignRight">Referal <i class="fas fa-arrow-up color-up"></i></h2>
            <div class="row backgroundGreyCard border-small ">
                <div class="col-lg-12 textAllignCenter displayInline rankmarg">
                    <p class="parrain ranked">Rank <i class="fas fa-globe-europe VirgoColor"></i></p>
                    <p>#155555</p>
                </div>
                <div class="col-lg-6 textAllignCenter displayInline">
                    <p class="statsTitle parrain">Referrals</p>
                    <p>XXX Referrals</p>
                </div>
                <div class="col-lg-6 textAllignCenter displayInline">
                    <p class="statsTitle parrain">Rewards </p>
                    <p class="color-up font-bold">500 <span class="VirgoColor">VGO</span></p>
                </div>

                <div class="col-lg-12 textAllignCenter">
                    <p class="share-with-friends">Share your rank</p>
                    <a href="#"><i class="fab fa-twitter share-social"></i></a>
                    <a href="#"><i class="fab fa-discord share-social"></i></a>
                    <a href="#"><i class="fab fa-medium-m share-social"></i></a>
                    <a href="#"><i class="fab fa-telegram-plane share-social"></i></a>
                    <a href="#"><i class="fab fa-reddit-alien share-social"></i></a>
                    <a href="#"><i class="fab fa-bitcoin share-social"></i></a>
                </div>

            </div>
        </div>
    </div>

    <div class="margin-block row ">
        <div class="col-lg-9 marginauto">
            <h2 class="parrain VirgoColor textAllignLeft">Leaderboard</h2>
            <div class="row">
                <table class="table backgroundGreyCard table-borderless textAllignCenter">
                    <thead>
                        <tr class="tableTop">
                            <th scope="col">N°</th>
                            <th scope="col">ID</th>
                            <th scope="col"></i>Percents</th>
                            <th scope="col">Earned</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="tableTop">You</th>
                            <td>User stats</td>
                            <td>User stats</td>
                            <td>User stats</td>
                        </tr>
                        <tr>
                            <th scope="row" class="goldColor">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row" class="silvercolor">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row" class="bronzeColor">3</th>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--
        <div>
            <div class="referCode">
                <h3 id="idRefer" onclick="CopyToClipboard('idRefer');onclick=NotifCopy()"><?php echo $nowCurrency[0]['your_referal_code']; ?></h3>
            </div>
        </div>
        <div class="col-lg-2 allign-center marginauto">
            <p class="VirgoColor" id="copiedLink">Clique pour copier ton réferal !</p>
            <p class="VirgoColor">Partage ton lien !</p>
            <div class="socialDiv">
                <a href="#">
                    <i class="fab fa-twitter boxSocial"></i>
                </a>
                <a href="#">
                    <i class="fab fa-reddit-alien boxSocial"></i>
                </a>
                <a href="#">
                    <i class="fab fa-telegram-plane boxSocial"></i>
                </a>
                <a href="#">
                    <i class="fab fa-discord boxSocial"></i>
                </a>
                <a href="#">
                    <i class="far fa-copy boxSocial" onclick="copyToClipboard()" ;></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-lg-12 allign-center">
        <h2 class="VirgoColor">Les avantages</h2>
        <div class="margin-Describ">
            <div class="col-lg-3 displayInline vertical-allign-top">
                <h3>50 VGO pour lui, 50 VGO pour vous*</h3>
                <p>
                    Votre filleul reçoit 50 VGO dès son inscription.

                    Grâce à votre lien,vous touchez 50 VGO.
                    Vous êtes gagnant,lui aussi.

                    <span style="font-weight: bold;">*A condition que le filleul ait un minimum de 100 VGO sur son compte</span>
                </p>
            </div>
            <div class="col-lg-3 displayInline vertical-allign-top">
                <h3>Plus vous en avez, plus vous gagnez !</h3>
                <p>
                    Dès que vous arrivez a 10 filleuls, vous devenez Membre Gold,ce qui vous donnera accès à 500 VGO.

                    Pour les plus courageux, parrainer 50 filleuls vous fera devenir un Membre Ultime de la communauté et vous recevrez 2500 VGO.

                    <span style="font-weight: bold;">*A condition que le filleul ait un minimum de 100 VGO sur son compte.</span>
                </p>
            </div>
            <div class="col-lg-3 displayInline vertical-allign-top">
                <h3>Votre filleul est actif ? Tant mieux.</h3>
                <p>
                    Chaque objectif validé par votre filleul sur notre reward center vous rapporte 5% du montant de l'objectif,et ce,à vie.
                </p>
            </div>
        </div>
    </div>

-->

</body>
<div style="margin-top: 2em !important;">
    <?php include('../includes/footer.php'); ?>
</div>
<script>
    var tooltip = document.getElementById("copiedLink");

    function CopyToClipboard(id) {
        var r = document.createRange();
        r.selectNode(document.getElementById(id));
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(r);
        document.execCommand('copy');
        window.getSelection().removeAllRanges();
    }

    function NotifCopy() {
        tooltip.classList.remove('VirgoColor')
        tooltip.classList.add('blackColor');
        tooltip.innerHTML = "Lien copier sur ton clique";
    }

    function copyToClipboard() {
        var refer = <?php echo $nowCurrency[0]['your_referal_code']; ?>;
        var dummyContent = "https://virgo.network/login/index.php?referal=" + refer;
        var dummy = $('<input>').val(dummyContent).appendTo('body').select()
        document.execCommand('copy')
        $(dummy).remove();
        NotifCopy();
    }

    var i = 0;
    var referal = "REFERAL"
    var invite = "Invite friends,"
    var txt = 'WIN MORE !';
    var speed = 75;

    function typeWriter() {
        if (i < txt.length) {
            document.getElementById("referal").innerHTML += referal.charAt(i);
            document.getElementById("winner").innerHTML += txt.charAt(i);
            document.getElementById("invite").innerHTML += invite.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }



    function move() {
        var i = 0;
        if (i == 0) {
            i = 1;
            var elem = document.getElementById("myBar");
            var width = 10;
            var id = setInterval(frame, 5);

            function frame() {
                if (width >= 100) {
                    clearInterval(id);
                    i = 0;
                } else {
                    width++;
                    elem.style.width = width + "%";
                    elem.innerHTML = width + "%";
                }
            }
        }
    }
</script>

</html>