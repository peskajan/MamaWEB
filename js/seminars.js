
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
                title: 'Jak zacházet se stresem',
                date: '26.1.2017',
                time: '17.30 – 20.30',
                prize: '300 Kč',
                description: 'Náš život je často hektický a uspěchaný. A přesto, že víme, že to tak není dobře, odkládáme odpočinek, zklidnění a pohodu na „někdy jindy“ -  pak…až dodělám…ještě tady to… jenže většinou do toho přijde něco dalšího a my tak žijeme v neustálém tlaku a stresu. Zkuste to tentokrát jinak a přijďte relaxovat a přemýšlet nad tématem „já a stres“. Budeme společně hledat a zkoušet vhodné způsoby uvolňování napětí. Zaměříme se také na možnosti jak pracovat s akutní zátěží i jak předcházet dlouhodobějším stresům.'
            },
            {
                title: 'Sebedůvěra',
                date: '25.2.2017',
                time: '13.30 - 18.30',
                prize: '550 Kč',
                description: 'V životě potřebujeme zažívat, že věci, které děláme mají smysl a   že máme šanci je zvládat. To nám pomáhá vyrovnat se i s aktuálním neúspěchem, s vlastní chybou a  s momentální  „nepřízní  osudu“. V této souvislosti pak mluvíme o sebevědomí, sebedůvěře… nebo také o podceňování se,  komplexu méněcennosti….  Míru naší sebedůvěry ovlivňují naše vrozené dispozice a povahové vlastnosti a to jak ji podporovali v raném dětství  naši rodiče. Zároveň je ovlivňována našimi vlastními zkušenostmi – je to postoj k sobě samému, který můžeme ovlivňovat a měnit.  V setkání se budeme věnovat konkrétním činnostem, které mohou naše sebevědomí a sebedůvěru  zlepšovat.'
            },
            {
                title: 'Překonávání překážek',
                date: '23.3.2017',
                time: '17.30 – 20.30',
                prize: '300 Kč',
                description: 'Každý z nás občas zažije období, kdy se mu do cesty staví větší či menší překážky. Pro někoho jsou výzvou k většímu úsilí, v někom budí obavy a chuť se vzdát, v někom zlost „na osud“, někdo se cítí bezmocný. Schopnost zvládat obtíže a životní překážky do určité míry ovlivňuje také naši spokojenost se sebou samými. Setkání bude zaměřeno na naše strategie pro překonávání překážek tak, abychom se sebou byli více spokojení, lépe vybavení na jejich „zdolávání“.'
            },
            {
                title: 'Moje cesta (odkud přicházím a kam jdu)',
                date: '22.4.2017',
                time: '13.30 - 18.30',
                prize: '550 Kč',
                description: 'Čas od času se zamýšlíme (někdo častěji, někdo spíš ve zlomových chvílích či při  životních změnách) nad tím, co jsme už dokázali / nedokázali a co nás v budoucnu ještě čeká, popř. co bychom dokázat nebo prožít chtěli. Někdy si pokládáme otázku „kdo vlastně jsem?  která z mých životních rolí mě naplňuje? co mě naopak stojí mnoho sil a „nervů“ a „stojí mi to“ vůbec za to? Co čekám od života? Přijďte se na tyto a podobné otázky podívat trochu podrobněji, přijďte hledat odpovědi.'
            },
            {
                title: 'Důležité maličkosti – zlepšování vztahů',
                date: '25.5.2017',
                time: '17.30 – 20.30',
                prize: '300 Kč',
                description: 'Velké věci se často rodí z drobných každodenních maličkostí. Stejně tak je to u vztahů, kdy často malé věci a malé kroky mají ohromný vliv na zlepšení vztahu a společného života.  V rámci setkání se zaměříme na možnosti jak  můžeme posilovat své vztahy k nejbližším, jak  činit spokojenější sebe i druhé.'
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