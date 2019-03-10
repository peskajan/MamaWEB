
$(document).ready(function () {
    
    // parse a date in dd.mm.yyyy format
    function parseDate(dateString) {
        var parts = dateString.split('.');
        // new Date(year, month [, day [, hours[, minutes[, seconds[, ms]]]]])
        return new Date(parts[2], parts[1] - 1, parts[0]); // Note: months are 0-based
    }

    function viewModel() {
        
        var itemExpanded = false;
        
        this.getLabelStatus = function (dateString) {
           return this.isActive(dateString) ? 'label-primary' : 'label-default';
        };
        
        this.getCollapsableStatus = function (dateString) {
            if (this.isActive(dateString) && !itemExpanded) {
                itemExpanded = true;
                return 'in';
            }
            return '';
        };
        
        this.isActive = function (dateString) {
            var currentDate = new Date();
            var date = parseDate(dateString);
            return currentDate < date;
        };


        this.seminars = [
            {
                title: 'Já žena',
                date: '16.9.2017',
                time: '13.30 - 18.30',
                prize: '600 Kč',
                description: 'Od narození si budujeme a postupně „oblékáme“ svou ženskost. Někdy nám v tom okolí pomáhá, někdy jsou však rodově předávané vzorce „správné ženy“ i zdrojem různých frustrací a nepohodlí. Různé oblasti našeho ženství (prožívání vlastního těla, sexuality, vztahy s muži, mateřství apod.) mohou být pro nás oporou, ale i nám mohou znepříjemňovat život. Na setkání budeme mít prostor pro hledání možností změny v prožívání své ženskosti a na posilování našeho ženského sebevědomí.'
            },
            {
                title: 'Komunikace',
                date: '4.11.2017',
                time: '13.30 - 18.30',
                prize: '600 Kč',
                description: 'Náš způsob komunikace ovlivňuje vztahy s blízkými lidmi, výrazně se podílí i na našem začlenění do širšího okolí, do různých skupin, pracovního kolektivu apod. V rámci setkání budeme mapovat náš osobní způsob komunikace, jeho pozitiva ale i negativa a případné překážky. Pracovat budeme také s neverbální složkou komunikace a s možnostmi posilování jednotlivých komunikačních dovedností.'
            },
            {
                title: 'Já musím – já chci',
                date: '30.11.2017',
                time: '17.30 – 20.30',
                prize: '350 Kč',
                description: 'Náš dospělý život je někdy omezován různými „scénáři“, které jsme přijali v dětství. Používáme je přesto, že některé z nich nám už dávno „nedělají dobrou službu“. V setkání se budeme věnovat rozpoznávání těchto scénářů a zvažování, které z nich si chceme nechat a které chceme nahradit novými, více prospěšnými.'
            }
        ];
        
        this.beseds = [
            {
                title: 'Proč se pořád perete?',
                date: '7.2.2017',
                description: 'Řešíte doma často „sourozenecké hádky“?  Přemýšlíte nad tím,  co k tomu vaše děti vede a jestli to můžete nějak ovlivnit? Přijďte si  poslechnout a popovídat  o plusech a mínusech jednotlivých pořadí narození, o  úskalích sourozeneckých vztahů a o možnostech  jak s nimi jako rodiče můžete nakládat.'
            },
            {
                title: 'Vy jste na mě zlí!',
                date: '7.3.2017',
                description: 'Stává se Vám, že vás toto či podobné tvrzení Vašeho dítěte „dostane do úzkých“? Přemýšlíte nad tím, co se s vaším dítětem děje, že má potřebu to říkat – znamená to snad, že byste po něm neměli nic chtít?  Chtěli by jste tomu více porozumět?  Přijde se spolu s dalšími rodiči zamyslet nad tímto tématem.'
            },
            {
                title: 'To víš, že tě máme rádi!',
                date: '4.4. 2017',
                description: 'V životě dítěte (i dospělého)  jsou okamžiky, kdy potřebují  od svých blízkých ujištění o jejich náklonnosti,  o jejich vztahu k nim. Zároveň tato „žádost“ může rodiče znejistit. Beseda bude zaměřená na možnosti vyjadřování emocí v rodině tak, abychom podporovali pozitivní klima v rodině i sebedůvěru dětí.'
            },
            {
                title: 'Nechtějí si se mnou hrát!',
                date: '2.5.2017',
                description: 'Vrstevnické vztahy jsou důležitou součástí života dítěte a ne vždy se dítěti daří najít si mezi ostatními dětmi „to svoje místo“. Společně se zamyslíme nad tím, jak můžeme dítěti  pomoci hledat si kamarády, cítit se dobře  ve skupině vrstevníků ať už ve škole, či v zájmových kroužcích.'
            }
        ];
    };

    ko.applyBindings(new viewModel());
});