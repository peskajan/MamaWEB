
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
                title: 'To jsem já a to jsem také já',
                date: '22.9.2016',
                time: '17.30 – 20.30',
                prize: '300 Kč',
                description: 'Setkání určené pro ty, kteří se snaží lépe porozumět sami sobě a „věcem, které se jim dějí“. Prostřednictvím sady Projektivních koláží (blížší informace <a href="http://huptych.cz">zde</a>) se zamyslíme nad svými méně uvědomovanými stránkami, které mohou ovlivňovat naše prožívání i kontakt s druhými lidmi.'
            },
            {
                title: 'Práce s hněvem',
                date: '8.10.2016',
                time: '13.30 - 18.30',
                prize: '550 Kč',
                description: 'Hněv je naše emoční reakce na situaci, která nás dráždí. Je „živený“ pocitem křivdy, zklamání, ublížení, odmítnutí či trapnosti. Může být směřován směrem ven i dovnitř (jak ve vnímání viníka, tak v následné reakci). Ve svém základním aspektu nám umožňuje reagovat na nebezpečí, díky hněvu získáváme energii na řešení situace. Zároveň nás hněv upozorňuje na něco důležitého, čemu možná vědomě či nevědomě nevěnujeme dostatečnou pozornost. V setkání se zamyslíme nad svým způsobem prožívání a zpracovávání hněvu a nad možností případné změny.'
            },
            {
                title: 'Můj styl řešení konfliktů',
                date: '13.10.2016',
                time: '17.30 – 20.30',
                prize: '300 Kč',
                description: 'Konflikty patří neodmyslitelně k našemu životu. Důležité ale je, jak je prožíváme, jak je umíme řešit, zda před nimi „utíkáme“ nebo je naopak sami spouštíme, vyhledáváme... Setkání bude věnováno uvědomění si svého stylu řešení konfliktů pomocí krátkého dotazníku a především pak hledání možných změn ve svém přístupu ke konfliktům a nahrazování našich „komunikačních zlozvyků“.'
            },
            {
                title: 'Jak působím na své okolí',
                date: '10.11.2016',
                time: '17.30 – 20.30',
                prize: '300 Kč',
                description: 'To jak se tváříme, gestikulujeme, jakým způsobem mluvíme… tím vším působíme na naše okolí a tím pak také ovlivňujeme chování k nám. Setkání bude věnované uvědomování si naší „vnější tváře“, toho co vysíláme směrem k druhým. Budeme hledat odpovědi na otázky – jak se prezentuji? vyhovuje mi to? chci něco změnit? co a jak?'
            },
            {
                title: 'Práce se sny',
                date: '26.11.2016',
                time: '13.30 - 18.30',
                prize: '550 Kč',
                description: 'Proč se mi zdálo právě toto, co to mělo znamenat? Dává mi sen nějaké odpovědi na aktuální situaci a jak mu mám rozumět? Proč se mi opakuje podobný sen? Jak dál pracovat se sny? Odpovědím na tyto a podobné otázky bude věnováno další sobotní setkání. Sny nás mohou vést k přehodnocení různých stanovisek, upozornit na věci, kterých si nevšímáme, opomíjíme. Budeme pracovat se sny, které si „přinesete“, hledat jejich spojitost s aktuální osobní situací. Vyzkoušíme některé možnosti další práce se sny, jejich pochopení a přesahu do reality.'
            },
            {
                title: 'Když mám v hlavě přeplněno – práce s cíli',
                date: '1.12.2016',
                time: '17.30 – 20.30',
                prize: '300 Kč',
                description: 'Někdy se na nás úkoly a povinnosti tlačí ze všech stran. V každodenním shonu se tak často nedostaneme k tomu, co vnímáme jako důležité, hodnotné. Paradoxně pak trávíme více času tím nedůležitým a zásadní věci odsouváme až.. potom.. když.. jestli.. Setkání bude věnováno jednak utřídění vlastních cílů v rámci zklidnění a relaxace a možným způsobům práce s dlouhodobými cíli.'
            }
        ];
        
        this.beseds = [
            {
                title: 'Rodiče v záběhu – dost dobrý rodič',
                date: '15.9.2016',
                description: 'Chcete se ujistit o svém pojetí výchovy? Přijďte načerpat nové síly a energii k plnění jedné z nejnáročnějších životních rolí „být dobrým rodičem svým dětem“. Mluvit budeme také o vhodné struktuře rodinného systému a o jednotlivých rolích v ní. O tom jak se vzájemně podporovat, abychom pro dítě vytvořili bezpečné a přívětivé prostředí pro jeho zdravý vývoj. Prostor bude také na vaše dotazy a vlastní zkušenosti.'
            },
            {
                title: 'Rodiče v záběhu - jak podporovat celkový vývoj dítěte',
                date: '20.10.2016',
                description: 'Psychický vývoj dítěte postupuje po jednotlivých krocích, které se vzájemně podmiňují. V každém věkovém období na dítě „čeká určitý vývojový úkol“. Jeho plnění mohou rodiče svým přístupem výrazně ovlivnit. Beseda bude zaměřená na konkrétní možnosti, jak podporovat zdravý psychický vývoj vašeho dítěte.'
            },
            {
                title: 'Rodiče v záběhu – jak podporovat emoční a sociální vývoj dítěte',
                date: '24.11.2016',
                description: 'Emoční a sociální dovednosti dítěte ovlivňují jeho začlenění mezi ostatní děti, jeho schopnosti komunikovat s okolím a tím se výrazně podílí na celkové spokojenosti dítěte. Beseda bude zaměřená na možnosti jak u dítěte rozvíjet dovednosti jako je sebedůvěra, samostatnost, komunikace, empatie, vyjadřování citů apod.'
            },
            {
                title: 'Chystáme se do 1. třídy - školní zralost',
                date: '15.12.2016',
                description: 'Setkání bude věnováno významu školní zralosti pro budoucí školní úspěšnost dítěte. Zaměříme se na jednotlivé oblasti důležité pro dobrý start ve škole – co by dítě před nástupem do školy mělo umět a jakým způsobem ho v tom podporovat. Jak postupovat v případě, kdy se dítěti v některé oblasti nedaří, popř. při odkladu školní docházky.'
            }
        ];
    };

    ko.applyBindings(new viewModel());
});