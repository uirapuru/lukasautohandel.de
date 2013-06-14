<img src="/images/<?= $sf_user->getCulture(); ?>/caption-biografia.png" class="caption"/>

<style>
    div.lll {
        display: block;
        height: 13px;
        float: left;
        /*background-color: rgba(255,0,0,0.5);*/
        clear: left;
        position:relative; top: 0
    }

    div.bg-image {
        background-image: url('/images/dj.png');
        background-repeat: no-repeat;
        background-position: left 7em;
        text-align: justify;
        font-family: Arial, sans-serif;
    }

    div#header-text {
        text-align: center;
        margin: 20px auto;
    }
</style>

<? $culture = $sf_user->getCulture() ? $sf_user->getCulture() : sfConfig::get('sf_default_culture'); ?>
<? if ($culture == "pl"): ?>

    <div id="header-text">
        Jego muzyka porywa tłumy klubowiczów.<br />
        Jego talent i ciężka praca zdobyły międzynarodowe uznanie.<br />
        Mający zaledwie 21 lat DJ, producent, miłośnik muzyki...
    </div>

    <div style="background-image: url('/images/bio-bg.png'); margin: 10px auto 20px auto; text-align: left;">
        <img src="/images/bio-logo.png" />
    </div>

    <div class="bg-image">
        <p>Thomas Cloud, znany także jako Tkaczu (Tomasz Tkacz) wcześnie rozpoczął swoją
            przygodę z muzyką. Mając zaledwie 13 lat zaczął rozwijać pasję swojego życia. Dzięki
            talentowi i ciężkiej pracy jego wysiłki odniosły sukces i już dwa lata później, w wieku 15
            lat, stanął na scenie rozpoczynając swoją karierę jako DJ Tkaczu.</p>
        <div class="lll" style="width:100px"></div>
        <div class="lll" style="width:105px"></div>
        <div class="lll" style="width:105px"></div>
        <div class="lll" style="width:105px"></div>
        <div class="lll" style="width:110px"></div>
        <div class="lll" style="width:120px"></div>
        <div class="lll" style="width:140px"></div>
        <div class="lll" style="width:145px"></div>
        <div class="lll" style="width:147px"></div>
        <div class="lll" style="width:150px"></div>
        <div class="lll" style="width:153px"></div>
        <div class="lll" style="width:155px"></div>
        <div class="lll" style="width:158px"></div>
        <div class="lll" style="width:160px"></div>
        <div class="lll" style="width:163px"></div>
        <div class="lll" style="width:165px"></div>
        <div class="lll" style="width:165px"></div>
        <div class="lll" style="width:163px"></div>
        <div class="lll" style="width:160px"></div>
        <div class="lll" style="width:155px"></div>
        <div class="lll" style="width:150px"></div>

        <p>Pierwsze lata kariery Thomasa Cloud'a były związane przede wszystkim z muzyką
            Hip Hop i Turntablism'em. Thomas szybko zdobył uznanie klubowiczów, rozkręcając
            imprezy w całym kraju jak i zagranicą oraz zajmując wysokie miejsca w zawodach
            turntablistycznych . Najlepszym dowodem jego wysokiej klasy są zdobyte przez niego
            tytuły: Mistrzostwo Polski Dj’ów ITF (International DJ Federation) / IDA (International
            Dj Association) 2010, 5. miejsce podczas Finałów Mistrzostw Świata oraz Dwukrotne 1.
            miejsce podczas corocznej bitwy Bruk DJ Battle, odbywającej się w ramach Festiwalu
            Sztuki i Kultury Ulicznej Bruk 2008/2009.</p>

        <p>Na jego koncie nie brakuje także występów ze światowej sławy DJ'ami i producentami.
            Wśród nich wymienić można m.in.: Eddie Thoneick, Norman Doray, Thomas Gold, Sebastian
            Drums, Robin S, Michael Canitrot, Syke'n'Sugarstarr, Dominic Minelli, DBN, Jewelz, Marc Van
            Linden, Martijn Ten Velden, Melanie Morena, Micky Slim, Mike Perry, Swen Weber, Till West,
            Yass.</p>

        <p>Uznany w środowisku za najlepiej zapowiadającego się DJ'a młodego pokolenia, Thomas
            Cloud wciąż się rozwijał, pozostając otwartym na różne style i gatunki muzyczne. Z
            czasem zaowocowało to zmianą wizerunku i pseudonimu. Od 2011 roku Thomas gra
            i tworzy mocny, progresywny House, Electro House oraz większość jego produkcji
            charakteryzuje szwedzki styl.</p>

        <p>Wkrótce nastąpi także premiera jego nowego singla nagranego razem z wokalistą
            Nick’iem Sinckler’em. Jeszcze w tym roku planowana jest pierwsza, oficjalna trasa
            Thomas'a Cloud'a, która obejmie kluby w całej Europie.</p>

        <p>Czym jeszcze zaskoczy nas Thomas Cloud? Jedno jest pewne: będzie o nim głośno!</p>
    </div>

<? elseif ($culture == "en"): ?>
    <div id="header-text">
        His music rouses clubbers.<br />
        His talent and hard work earned him an international recognition.<br />
        Already a 21-year old DJ, producer and music lover…
    </div>

    <div style="background-image: url('/images/bio-bg.png'); margin: 10px auto 20px auto; text-align: left;">
        <img src="/images/bio-logo.png" />
    </div>



    <div class="bg-image">
        <p>Thomas Cloud, also known as Tkaczu (Tomasz Tkacz), started his music adventure early. At the age of thirteen,
            he started to pursue the biggest passion of his life. Thanks to his talent and hard work, the efforts led
            him to success - two years later he already had the first on-stage performance. Thus, beginning his career
            as DJ Tkaczu. </p>
        <div class="lll" style="width:100px"></div>
        <div class="lll" style="width:105px"></div>
        <div class="lll" style="width:105px"></div>
        <div class="lll" style="width:105px"></div>
        <div class="lll" style="width:110px"></div>
        <div class="lll" style="width:120px"></div>
        <div class="lll" style="width:140px"></div>
        <div class="lll" style="width:145px"></div>
        <div class="lll" style="width:147px"></div>
        <div class="lll" style="width:150px"></div>
        <div class="lll" style="width:153px"></div>
        <div class="lll" style="width:155px"></div>
        <div class="lll" style="width:158px"></div>
        <div class="lll" style="width:160px"></div>
        <div class="lll" style="width:163px"></div>
        <div class="lll" style="width:165px"></div>
        <div class="lll" style="width:165px"></div>
        <div class="lll" style="width:163px"></div>
        <div class="lll" style="width:160px"></div>
        <div class="lll" style="width:155px"></div>
        <div class="lll" style="width:150px"></div>

        <p>In the early years of Thomas Cloud's career, Hip Hop and turntablism were the predominant influences.
            But, as the time progressed, Cloud quickly gained recognitions of clubbers from warming up parties,
            both domestically and globally. Simultaneously, his music began to rank highly on many charts as well
            as competitions. Some accolades he garnered and won are Polish DJ Championship ITF (International DJ
            Federation) / IDA (International Dj Association) 2010, 5th place in World Championship finals and 1st
            place at the annual Bruk DJ Battle, held at the Festival of Street Art and Culture "Bruk" 2008 / 2009.</p>

        <p>Thomas Cloud talent has not gone unnoticed by other artists. In the past, he has performed with world-famous
            DJs and producers such as: Eddie Thoneick, Norman Doray, Thomas Gold, Sebastian Drums, Robin S, Michael
            Canitrot, Syke'n'Sugarstarr, Dominic Minelli, DBN, Jewelz, Marc Van Linden, Martijn Ten Velden, Melanie
            Morena, Micky Slim, Mike Perry, Swen Weber, Till West, Yass.</p>

        <p>Regarded as the “most promising” DJ of our generation, Thomas Cloud has kept evolving and developing.  
            He has remained open to new styles and genres of music. In time, Cloud transformed his image and took a 
            new nickname. Since 2011, Cloud has been producing and creating hard, progressive House and Electro House.
            The majority of his music has a Swedish tone to it.</p>

        <p>His new single recorded with the vocalist Nick Sinckler will be debuted in the near future. Before the end
            of this year, a new Thomas Cloud's official tour is scheduled, stopping at clubs throughout the entire Europe.</p>

        <p>What will Clouds surprise us with next? One thing is certain: we will be hearing a lot about him!</p>
    </div>
<? endif; ?>
