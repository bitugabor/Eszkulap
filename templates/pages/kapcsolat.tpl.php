<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

<h1>Kapcsolat</h1>
    <form name="kapcsolat" action="./logicals/kapcsolat_2.php" onsubmit="return ellenoriz();" method="post">
        <div>
            <label>Név (minimum 5 karakter): <input type="text" id="nev" name="nev" size="20" maxlength="45"></label>
            <br/>
            <label>E-mail (kötelező): <input type="email" id="email" name="email" size="30" maxlength="40"></label>
            <br/>
            <label>Üzenet (kötelező): <br><textarea id="szoveg" name="szoveg" cols="40" rows="10"></textarea> </label>
            <br/>
            <input id="kuld" type="submit" value="Küld">
            <button onclick="ellenoriz();" type="button">Ellenőriz</button>
        </div>
    </form>
<br>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2697.1059287472817!2d19.02835761562573!3d47.46836517917571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741ddb89f518923%3A0x539dc6ebfe202716!2zRXN6a3Vsw6FwIMOBbGxhdHbDqWTFkSBFZ3llc8O8bGV0!5e0!3m2!1shu!2shu!4v1620593410770!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<br>
<a target="_blank" href="https://www.google.hu/maps/place/Eszkul%C3%A1p+%C3%81llatv%C3%A9d%C5%91+Egyes%C3%BClet/@47.4683652,19.0283576,17z/data=!3m1!4b1!4m5!3m4!1s0x4741ddb89f518923:0x539dc6ebfe202716!8m2!3d47.4683652!4d19.0305463">Nagyobb térkép</a>

</body>
</html> 