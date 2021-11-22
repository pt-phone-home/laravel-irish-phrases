<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phrases')->insert([
            'english' => 'an abject apology',
            'irish' => 'fiche leithscéal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'an abject apology',
            'irish' => 'leithscéal táiríseal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'abject failure',
            'irish' => 'teip ghlan',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and about time too',
            'irish' => 'agus is mithid',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and about time too',
            'irish' => 'más am is mithid',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s about time!',
            'irish' => 'más maith is mithid!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s about time!',
            'irish' => 'más mall is mithid!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'above all nights',
            'irish' => 'seachas oícheanta an domhain',
        ]);
        DB::table('phrases')->insert([
            'english' => 'above all people',
            'irish' => 'thar aon duine amuigh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'above all things',
            'irish' => 'os cionn gach uile ní',
        ]);
        DB::table('phrases')->insert([
            'english' => 'above all things',
            'irish' => 'thar gach uile ní',
        ]);
        DB::table('phrases')->insert([
            'english' => 'absolute fool',
            'irish' => 'amadán críochnaithe',
        ]);
        DB::table('phrases')->insert([
            'english' => 'absolute fool',
            'irish' => 'amadán déanta',
        ]);
        DB::table('phrases')->insert([
            'english' => 'absolute lack of concern with proceedings',
            'irish' => 'cuid an daimh den eadra',
        ]);
        DB::table('phrases')->insert([
            'english' => 'absolute nonsense',
            'irish' => 'amaidí chorpartha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'absolute nonsense',
            'irish' => 'deargsheafóid',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s an absolute torment!',
            'irish' => 'is mór an clipeadh é!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s an absolute torment!',
            'irish' => 'is mór an crá croí é!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the absolute truth',
            'irish' => 'lomchlár na fírinne',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the absolute truth',
            'irish' => 'lomchnámh na fírinne',
        ]);
        DB::table('phrases')->insert([
            'english' => 'absolutely certain',
            'irish' => 'lánchinnte',
        ]);
        DB::table('phrases')->insert([
            'english' => 'absolutely certain',
            'irish' => 'lándearfa',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he accepted like a shot',
            'irish' => 'ba é sin an guth a fuair a fhreagra',
        ]);
        DB::table('phrases')->insert([
            'english' => 'accidents will (do) happen',
            'irish' => 'bíonn an tubaiste ann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'accidents will (do) happen',
            'irish' => 'ní leithne an t-aer ná an timpiste',
        ]);
        DB::table('phrases')->insert([
            'english' => 'accidents will (do) happen',
            'irish' => 'nuair a thig an chiall tig an fhaill',
        ]);
        DB::table('phrases')->insert([
            'english' => 'an accomplished fact',
            'irish' => 'beart i gcrích',
        ]);
        DB::table('phrases')->insert([
            'english' => 'according to custom',
            'irish' => 'de réir gnáis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'according to precedent',
            'irish' => 'de réir nóis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'according to plan',
            'irish' => 'de réir mar a bhí leagtha amach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'according to tradition',
            'irish' => 'de réir seanchais',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he has an ace up his sleeve',
            'irish' => 'tá cárta cúil go fóill aige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'Achilles’ heel',
            'irish' => 'an ball nimhneach atá ar dhroim na staile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'Achilles’ heel',
            'irish' => 'an laige chinniúnach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to have an aching void (of hunger)',
            'irish' => 'goin ocrais a bheith ort',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the acid test',
            'irish' => 'an bhuntriail',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the acid test',
            'irish' => 'báire na fola',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the acid test',
            'irish' => 'promhadh na haigéide',
        ]);
        DB::table('phrases')->insert([
            'english' => 'an act of charity',
            'irish' => 'grá dia',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s a great act of charity on your part (ironically)',
            'irish' => 'is mór an déirc duit é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it would be a great act of charity',
            'irish' => 'ba mhór an grá dia é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he acted in cold blood',
            'irish' => 'rinne sé go fuarchúiseach é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'an act of God',
            'irish' => 'gníomh Dé',
        ]);
        DB::table('phrases')->insert([
            'english' => 'an act of treachery',
            'irish' => 'feillbheart',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was acting in his own interests',
            'irish' => 'bhí sé ag tochras ar a cheirtlín féin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was acting in his own interests',
            'irish' => 'bhí sé ag tochas a ghearbóige féin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'actions speak louder than words',
            'irish' => 'déan mórán agus can beagán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'actions speak louder than words',
            'irish' => 'is fearr an cruthú an gort ná na seacht seisreacha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'actions speak louder than words',
            'irish' => 'ní briathar a dhearbhaíonn ach gníomh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'actions speak louder than words',
            'irish' => 'ní briathra a dhearbhaíos ach gníomh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'actions speak louder than words',
            'irish' => 'téann focal le gaoth ach téann buille le cnámh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'actions speak louder than words',
            'irish' => 'téid focail le gaoith',
        ]);
        DB::table('phrases')->insert([
            'english' => 'acute agony (pain)',
            'irish' => 'pian ghártha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'ad infinitum',
            'irish' => 'go deo',
        ]);
        DB::table('phrases')->insert([
            'english' => 'ad libitum',
            'irish' => 'ar do thoil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'adapt to circumstances',
            'irish' => 'damhsa de réir an cheoil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to add fuel to the fire',
            'irish' => 'ag cur geire ar an tine',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to add fuel to the fire',
            'irish' => 'ag fadú leis an achrann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to add fuel to the fire',
            'irish' => 'an iaróg a chothú',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to add fuel to the fire',
            'irish' => 'an iaróg a chur ina suí',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to add insult to (the) injury',
            'irish' => 'an tarcaisne a chur i gceann na héagóra',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and to add insult to injury',
            'irish' => 'agus chun taircaisne a chur i gceann na héagóra',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s advanced in years',
            'irish' => 'tá sé cnagaosta',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the affair took a turn for the worse',
            'irish' => 'tháinig droch-chor sa scéal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'affairs of state',
            'irish' => 'gnóthaí stáit',
        ]);
        DB::table('phrases')->insert([
            'english' => 'I’m afraid it is (so)!',
            'irish' => 'is eagal liom!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'I’m afraid he’s not...',
            'irish' => 'is baolach nach bhfuil sé...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after all (in the end)',
            'irish' => 'i ndiaidh an iomláin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after all (is said and done)',
            'irish' => 'agus chuile rud ráite',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after all (is said and done)',
            'irish' => 'i ndiaidh gach ní',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after all (is said and done)',
            'irish' => 'tar éis an tsaoil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after due consideration',
            'irish' => 'i ndiaidh leormhachnamh a dhéanamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after due consideration',
            'irish' => 'tar éis an scéal a mheá go maith',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after due consideration',
            'irish' => ' tar éis an scéal a mheá go mion',
        ]);
        DB::table('phrases')->insert([
            'english' => 'on due consideration',
            'irish' => 'i ndiaidh leormhachnamh a dhéanamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'on due consideration',
            'irish' => 'tar éis an scéal a mheá go maith',
        ]);
        DB::table('phrases')->insert([
            'english' => 'on due consideration',
            'irish' => ' tar éis an scéal a mheá go mion',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after due consideration of...',
            'irish' => 'i ndiaidh machnamh cothrom a dhéanamh ar...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'after the event',
            'irish' => 'i ndiaidh an ama',
        ]);
        DB::table('phrases')->insert([
            'english' => '___ after my fancy',
            'irish' => ' ___ chun mo thola',
        ]);
        DB::table('phrases')->insert([
            'english' => 'again and again',
            'irish' => 'ar ais is ar ais',
        ]);
        DB::table('phrases')->insert([
            'english' => 'again and again',
            'irish' => 'arís agus arís eile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'against the grain',
            'irish' => 'in aghaidh an dola',
        ]);
        DB::table('phrases')->insert([
            'english' => 'against the grain',
            'irish' => 'in aghaidh an fhionnaidh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'against the grain',
            'irish' => 'in aghaidh an stuif',
        ]);
        DB::table('phrases')->insert([
            'english' => 'against great odds',
            'irish' => 'in éadan an tsrutha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'against the stream',
            'irish' => 'in éadan an tsrutha',
        ]);
        DB::table('phrases')->insert([
            'english' => '... against all odds',
            'irish' => '... taradh a dtiocfaidh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'against my orders',
            'irish' => 'thar mo chrosadh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'against his will',
            'irish' => 'ar a neamhthoil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'against his will',
            'irish' => 'in éadan a thola',
        ]);
        DB::table('phrases')->insert([
            'english' => 'age before beauty',
            'irish' => 'aois roimh áilleacht',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the age of reason',
            'irish' => 'aois na tuisceana',
        ]);
        DB::table('phrases')->insert([
            'english' => 'aged 29 years',
            'irish' => 'in aois a 29 bliain',
        ]);
        DB::table('phrases')->insert([
            'english' => 'aged 29 years',
            'irish' => 'in aois a 29 mbl',
        ]);
        DB::table('phrases')->insert([
            'english' => 'aged 86 years',
            'irish' => '86 bliain',
        ]);
        DB::table('phrases')->insert([
            'english' => 'aged 86 years',
            'irish' => 'aois 86 bl',
        ]);
        DB::table('phrases')->insert([
            'english' => 'aged sixty five years',
            'irish' => 'in aois a cúig bliana agus trí fichead',
        ]);
        DB::table('phrases')->insert([
            'english' => 'aged sixty five years',
            'irish' => 'i gcionn a 65 bliana d’aois',
        ]);
        DB::table('phrases')->insert([
            'english' => 'they agreed to differ',
            'irish' => 'rinne siad neamhshuim dá raibh eatarthu',
        ]);
        DB::table('phrases')->insert([
            'english' => 'al fresco',
            'irish' => 'amuigh faoin aer',
        ]);
        DB::table('phrases')->insert([
            'english' => 'al fresco',
            'irish' => 'faoin spéir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'alarms and excursions',
            'irish' => 'callán agus gleo',
        ]);
        DB::table('phrases')->insert([
            'english' => 'alarms and excursions',
            'irish' => 'fuadar agus foilsceadh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'alas and alack',
            'irish' => 'faraoir!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'alas and alack',
            'irish' => 'mo léan!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'alas and alack',
            'irish' => 'monuar!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'alive and kicking',
            'irish' => 'beo beathaíoch',
        ]);
        DB::table('phrases')->insert([
            'english' => 'alive and kicking',
            'irish' => 'beo beoga',
        ]);
        DB::table('phrases')->insert([
            'english' => 'alive and kicking',
            'irish' => 'beo bríomhar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s alive and well',
            'irish' => 'tá saol agus sláinte aige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s alive and well',
            'irish' => 'tá sé beo agus dea-bheo',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s alive and well',
            'irish' => 'tá sé fá shaol agus fá shláinte',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s alive and well',
            'irish' => 'tá sé ina b(h)eatha agus ina s(h)láinte',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s alive and well',
            'irish' => 'tá sé ina shaol is ina shláinte',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in all ...',
            'irish' => 'achan chineál leis an chineál eile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in all ...',
            'irish' => 'gach rud leis an rud eile ... ',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in all ...',
            'irish' => 'i dtaca le holc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in all ...',
            'irish' => 'idir an t-iomlán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in all ...',
            'irish' => 'idir gach aon rud',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in all ...',
            'irish' => 'idir lom is laimirne',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all along',
            'irish' => 'ar feadh na faide',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the best',
            'irish' => 'go n-éirí leat',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the better',
            'irish' => 'is amhlaidh is fearr é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the better for you!',
            'irish' => 'níor mheasa duit ar bith é!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all my bits and pieces',
            'irish' => 'mo chip is mo mheanaí',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all by himself!',
            'irish' => 'leis féin féin!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it will all come out (the whole story)',
            'irish' => 'beidh an súiche sa phota',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all confused',
            'irish' => 'níl tús ná deireadh air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all day ',
            'irish' => 'ar feadh an lae',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all day long',
            'irish' => 'i gcaitheamh an lae',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all day long',
            'irish' => 'le linn an lae (go léir)',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all day long',
            'irish' => 'ó mhaidin go faoithin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all in a day’s work',
            'irish' => 'nach cuid de mo ghnó é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all he ever does',
            'irish' => 'is é a fhor is a fhónamh é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all doom and gloom',
            'irish' => 'dhéanfadh sé geimhreadh den samhradh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it was all down hill (got worse) ',
            'irish' => 'chuaigh sé chun meatha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all ears',
            'irish' => 'chluinfeadh sé an féar ag fás',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all ears',
            'irish' => 'tá cluasa easóige aige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was all ears',
            'irish' => 'bhí cluas le héisteacht aige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he had all the excuses of the day',
            'irish' => 'bhí gach re leithscéal aige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the fashion (now)',
            'irish' => 'is é an faisean anois é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the fashion (now)',
            'irish' => 'is é an faisean go cruinn é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'that’s all very fine but ...',
            'irish' => 'tá go breá ach ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all this fuss about nothing!',
            'irish' => 'a leithéid de rírá gan údar!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all in the game',
            'irish' => 'caithfear teacht leis an saol',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all in the game',
            'irish' => 'sin é cor an tsaoil agat',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all his geese are swans',
            'irish' => 'is geal leis an fhiach dhubh a ghearrcach féin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all go',
            'irish' => 'tá an-ghó faoi',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the go now (all the rage)',
            'irish' => 'is air atá tóir anois',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all to the good',
            'irish' => 'is amhlaidh is fearr é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all to the good',
            'irish' => '(is) maith sin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all to the good',
            'irish' => 'is maith an scéal é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'that was all to the good',
            'irish' => 'ba mhaith mar a tharla',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all Greek to me',
            'irish' => 'ní thuigim focal de',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all Greek to me',
            'irish' => 'níl ann ach gibiris',
        ]);
        DB::table('phrases')->insert([
            'english' => ' it’s all gibberish to me',
            'irish' => 'ní thuigim focal de',
        ]);
        DB::table('phrases')->insert([
            'english' => ' it’s all gibberish to me',
            'irish' => 'níl ann ach gibiris',
        ]);
        DB::table('phrases')->insert([
            'english' => '... all I have',
            'irish' => '... a bhfuil agam',
        ]);
        DB::table('phrases')->insert([
            'english' => '... all I have',
            'irish' => '... a bhfuil i mo sheilbh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was all honey',
            'irish' => 'bhí sé chomh milis leis an siúcra',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all hell was let loose',
            'irish' => 'bhí ceann scaoilte le diabhail ifrinn',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all in a day’s work',
            'irish' => 'cuid de mo ghnóthaí é sin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in all',
            'irish' => 'gach rud leis an rud eile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in all',
            'irish' => 'tríd an phíosa',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all in your imagination!',
            'irish' => 'ar do shúile atá sé uilig!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s your imagination!',
            'irish' => 'á fheiceáil duit atá sé!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s your imagination!',
            'irish' => 'ag samhlú atá tú!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all in the same breadth',
            'irish' => 'in aon rabhán amháin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'we’re all in the same boat',
            'irish' => 'is é an dála céanna againn ar fad é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'we’re all in the same boat',
            'irish' => 'is ionann cás don iomlán againn',
        ]);
        DB::table('phrases')->insert([
            'english' => '... to all intents and purposes',
            'irish' => 'tá sé ionann is ...',
        ]);
        DB::table('phrases')->insert([
            'english' => '... to all intents and purposes',
            'irish' => '... , ionann’s',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all he’s interested in',
            'irish' => ' is é a fhor is a fhónamh é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all joking aside',
            'irish' => 'leis an ghreann a fhágáil inár ndiaidh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all mod cons',
            'irish' => 'gach deis is nua',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the more reason why you should ...',
            'irish' => 'sin mar is córa duit ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the more reason ...',
            'irish' => 'is amhlaidh is córa ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all necessary arrangements',
            'irish' => 'gach socrú dá bhfuil riachtanach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all he needed was an excuse',
            'irish' => 'ní raibh uaidh ach an leathchéad',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all he needed was an excuse',
            'irish' => 'ní raibh uaidh ach an tsiocair',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all damn nonsense',
            'irish' => 'tuar cait is féasóg air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all is not lost',
            'irish' => 'ní fíon ar lár é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all one',
            'irish' => 'is ionann é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all one',
            'irish' => 'sé an dá mhar a chéile é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all one',
            'irish' => 'is ionann sa chás é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all or none',
            'irish' => 'lán nó dada',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all or none',
            'irish' => 'lán nó loic',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all or nothing',
            'irish' => 'beifear beirthe nó caillte leis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all or nothing',
            'irish' => 'tá an t-iomlán i ngeall air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all out (in totality)',
            'irish' => 'faoi iomlán siúil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all over again',
            'irish' => 'athuair',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all over again',
            'irish' => 'as an nua',
        ]);
        DB::table('phrases')->insert([
            'english' => 'she’s all over him',
            'irish' => 'tá sí leáite anuas air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'she’s all over him',
            'irish' => 'tá sí ina coda beaga timpeall air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all over the country',
            'irish' => 'ar fud na tíre uilig',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all over the place',
            'irish' => 'ar fud na bhfudanna',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all over the place',
            'irish' => 'ar fud an bhaill',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all over the world',
            'irish' => 'i gcríocha an domhain mhóir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all over the world',
            'irish' => 'ar fud an domhain',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all his own way',
            'irish' => 'ar aghaidh boise aige',
        ]);
        DB::table('phrases')->insert([
            'english' => '... all in my power',
            'irish' => '... a bhfuil ar mo chumas',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the rage',
            'irish' => 'níl ann anois ach é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the rage',
            'irish' => 'tá an tóir shíoraí anois air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the rage',
            'irish' => 'tá an tóir ag an saol mhór air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the rage',
            'irish' => 'tá gáir mhór leis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all right!',
            'irish' => 'tá ceart!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all right (a good fellow)',
            'irish' => 'tá an mianach ceart ann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all right for you to ...',
            'irish' => 'is réidh agatsa bheith ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all right on paper',
            'irish' => 'is éasca a rá ná a dhéanamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all right on paper',
            'irish' => 'is fusa a rá ná á dhéanamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all is rosy in the garden',
            'irish' => 'tá mil ar chuiseogach ann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the same ...',
            'irish' => 'san am chéanna ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the same to me',
            'irish' => 'is cuma domsa',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the same to me',
            'irish' => 'is amhlaidh dom é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the same to me',
            'irish' => 'is ionann is an cás (dom) (é)',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all the same to you',
            'irish' => 'comhbhuíochas duit é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all at sea',
            'irish' => 'tá an scéal sa mhuileann air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all seems yellow to the jaundiced eye',
            'irish' => 'feiceann súil ghruama saol gruama',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all singing off the same score sheet',
            'irish' => 'uile ar aon scór amháin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all sorts and conditions of men',
            'irish' => 'an uile chineál fear',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all sorts and conditions of men',
            'irish' => 'an uile shaghas fear',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all sorts of excuses',
            'irish' => 'gach re leithscéal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all spruced up',
            'irish' => 'chomh deismir le bábóg',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all and sundry',
            'irish' => 'an saol (mór) agus a mháthair',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all and sundry',
            'irish' => 'idir liath agus leanbh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all and sundry',
            'irish' => 'an saol Gaelach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all and sundry',
            'irish' => 'an t-iomlán léir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all and sundry',
            'irish' => 'uaisle agus anuaisle',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the highborn and lowborn',
            'irish' => 'an saol (mór) agus a mháthair',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the highborn and lowborn',
            'irish' => 'idir liath agus leanbh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the highborn and lowborn',
            'irish' => 'an saol Gaelach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the highborn and lowborn',
            'irish' => 'an t-iomlán léir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the highborn and lowborn',
            'irish' => 'uaisle agus anuaisle',
        ]);
        DB::table('phrases')->insert([
            'english' => ' he’s all talk',
            'irish' => 'dhéanfadh sé gach uile rud ar a theanga',
        ]);
        DB::table('phrases')->insert([
            'english' => ' he’s all talk',
            'irish' => 'níl ann ach bolgán béice',
        ]);
        DB::table('phrases')->insert([
            'english' => ' he’s all talk',
            'irish' => 'níl ann ach gaotaire',
        ]);
        DB::table('phrases')->insert([
            'english' => ' he’s all talk',
            'irish' => ' níl ann ach scaothaire',
        ]);
        DB::table('phrases')->insert([
            'english' => ' he’s all talk',
            'irish' => 'níl ina chaint ach gaoth mhór',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all talk (and) no action',
            'irish' => '(an) focal mór agus droch-chur leis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all talk (and) no action',
            'irish' => 'an focal mór agus gan cur leis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all talk (and) no action',
            'irish' => 'gothaí móra agus buillí beaga',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all talk (and) no action',
            'irish' => 'is mó an torann ná an olann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all talk (and) no action',
            'irish' => 'ní briathar a dhearbhaíos ach gníomh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'that’s all the thanks I get! ',
            'irish' => 'sin a bhfuil de bhuíochais orm!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'that’s all the thanks I get from you!',
            'irish' => 'sin a bhfuil de bhuíochas (agat)!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all there! (astute / quick-minded)',
            'irish' => 'níl aon néal air!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all (other) things being equal',
            'irish' => 'agus gach ní eile mar a chéile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all things are possible',
            'irish' => 'tá dóigh ar gach aon rud',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all things come to an end',
            'irish' => 'más fada an lá tig an oíche',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all things considered ...',
            'irish' => 'i dtaca le holc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all things considered ...',
            'irish' => 'le gach uile shórt a mheas ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all things considered ...',
            'irish' => 'le gach uile shórt a mheá ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all things considered ...',
            'irish' => 'gach rud leis an rud eile ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all things considered ...',
            'irish' => 'idir achan sórt ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all those things',
            'irish' => 'na rudaí sin uilig go léir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to be all things to all men',
            'irish' => 'bheith tuilleamaíoch le gach duine',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s all thumbs',
            'irish' => 'tá méara sliopacha air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all told (all together)',
            'irish' => 'san iomlán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all of a tremble',
            'irish' => 'ar aon bharr amháin creatha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the way',
            'irish' => 'go deireadh an aistir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the way',
            'irish' => 'i rith an bhealaigh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all was well',
            'irish' => 'bhí go maith is ní raibh go holc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all went well',
            'irish' => 'bhí go maith is ní raibh go holc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all very well for you!',
            'irish' => 'is réidh agatsa é!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s all very well for you to talk',
            'irish' => 'is réidh agat é a bheith ag caint',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the while',
            'irish' => 'i rith an ama',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the while',
            'irish' => 'ar feadh na faide',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the world and his wife',
            'irish' => 'an domhan is a mháthair',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the world and his wife',
            'irish' => 'an saol Gaelach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all and sundry',
            'irish' => 'an domhan is a mháthair',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all and sundry',
            'irish' => 'an saol Gaelach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all his worldly goods',
            'irish' => 'a chuid de mhaoin an tsaoil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all the worse',
            'irish' => 'is amhlaidh is measa é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all (the) year round',
            'irish' => 'ó cheann ceann na bliana',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all’s well',
            'irish' => 'tá gach rud mar is cóir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all’s well',
            'irish' => 'tá gach uile shórt ceart',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all’s well!',
            'irish' => 'gach ní i gcóir!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all’s well!',
            'irish' => 'tá i gceart!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all’s well that ends well',
            'irish' => 'an cluiche deireanach an imirt',
        ]);
        DB::table('phrases')->insert([
            'english' => 'all’s well that ends well',
            'irish' => 'mol a dheireadh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'Alleluia!',
            'irish' => 'Aililiú!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to allow for all possibilities',
            'irish' => 'chuile rud sa mheá',
        ]);
        DB::table('phrases')->insert([
            'english' => 'to allow for all possibilities',
            'irish' => 'gach uile shórt a chur san áireamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'almost always',
            'irish' => 'chóir a bheith i dtólamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'almost always',
            'irish' => 'i gcónaí beagnach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'almost always',
            'irish' => 'i gcónaí nach mór',
        ]);
        DB::table('phrases')->insert([
            'english' => 'along with that',
            'irish' => 'ina cheann sin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the alternative is even worse',
            'irish' => 'más olc maoil is measa mullach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'always the easy way out!',
            'irish' => 'gach rogha le fána!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'always in our memories',
            'irish' => 'i gcónaí inár gcuimhne',
        ]);
        DB::table('phrases')->insert([
            'english' => 'you were always on my side',
            'irish' => 'bhí tú riamh fabhrach dom',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s always on the go',
            'irish' => 'tá an diabhal ina chosa',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he always turns up trumps',
            'irish' => 'bíonn an t-ádh ag rith leis i gcónaí',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s always up to something',
            'irish' => 'tá sé lán ealaíonach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'always with us',
            'irish' => 'linn i gcónaí',
        ]);
        DB::table('phrases')->insert([
            'english' => 'amiable qualities',
            'irish' => 'dea-thréithe',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it (all) amounts to the same thing',
            'irish' => 'is ionann an cás',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it (all) amounts to the same thing',
            'irish' => 'is ionann sa chás é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it (all) amounts to the same thing',
            'irish' => 'is é an rud céanna ar deireadh é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it (all) amounts to the same thing',
            'irish' => 'tá sé chomh fada is atá sé leathan',
        ]);
        DB::table('phrases')->insert([
            'english' => 'ample opportunity',
            'irish' => 'faill fhairsing',
        ]);
        DB::table('phrases')->insert([
            'english' => 'ample opportunity',
            'irish' => 'fiche faill',
        ]);
        DB::table('phrases')->insert([
            'english' => '___ and all as they were ...',
            'irish' => '___ agus uile is mar a bhí siad ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and their beloved child ___',
            'irish' => 'agus a leanbh ionúin ___',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and his daughter ___ ',
            'irish' => 'agus a iníon ___ ',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and his daughter ___ ',
            'irish' => 'agus a nín ___',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and their other family members ___ , ___',
            'irish' => 'agus a gclann eile ___ , ___',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and that’s an end to the matter',
            'irish' => 'agus sin a bhfuil de',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and there’s an end to it!',
            'irish' => 'sin é a dheireadh!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and that’s flat!',
            'irish' => 'agus ná bíodh aon amhras faoi sin!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and further, ... ',
            'irish' => 'agus thairis sin, ...',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and gladly',
            'irish' => '... fá chroí mhór mhaith',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and last but not least',
            'irish' => '... agus an ball is mó ar deireadh',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and moreover ...',
            'irish' => '... agus a dhálta sin ... ',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and moreover ...',
            'irish' => '... agus chomh maith céanna ...',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and moreover ...',
            'irish' => '... agus lena chois sin ...',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and no wonder!',
            'irish' => '... ní nach ionadh!',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and it’s no wonder',
            'irish' => '... agus a ábhar sin agat',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and you have every reason to be',
            'irish' => '... agus a ábhar sin agat',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and no half-measures',
            'irish' => 'agus ní ar leathchois sin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and no mistake',
            'irish' => 'gan bhréag gan amhras',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and so on / forth',
            'irish' => '... agus dá réir sin',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and so on / forth',
            'irish' => '... agus eile',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and so on / forth',
            'irish' => '... agus mar sin de',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and so on / forth',
            'irish' => '... agus rud',
        ]);
        DB::table('phrases')->insert([
            'english' => '...and something to spare',
            'irish' => '... agus fuíollach aige/aici',
        ]);
        DB::table('phrases')->insert([
            'english' => '...and then some',
            'irish' => '... agus fuíollach aige/aici',
        ]);
        DB::table('phrases')->insert([
            'english' => '...and such',
            'irish' => '... agus a leithéidí',
        ]);
        DB::table('phrases')->insert([
            'english' => '...and such',
            'irish' => '... agus an sórt sin',
        ]);
        DB::table('phrases')->insert([
            'english' => '...and such',
            'irish' => '... agus rud',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and that’s that!',
            'irish' => 'agus sin sin!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'and to top it all ...',
            'irish' => 'agus mar bharr ar an iomlán ...',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and what not',
            'irish' => '... agus gach uile shórt',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and what not',
            'irish' => '... agus rudaí eile mar sin',
        ]);
        DB::table('phrases')->insert([
            'english' => '... and what’s more ...',
            'irish' => '... agus rud (beag) eile de ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the angels of glory had a little cradle prepared for __',
            'irish' => 'ag aingle na glóire bhí cliabhán beag cóirithe do __',
        ]);
        DB::table('phrases')->insert([
            'english' => 'there’s another side to the story',
            'irish' => 'tá taobh eile ar an tseithe',
        ]);
        DB::table('phrases')->insert([
            'english' => 'any port in a storm!',
            'irish' => 'in anás béile, as portán féile!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'any Tom, Dick or Harry',
            'irish' => 'gach uile dhailtín',
        ]);
        DB::table('phrases')->insert([
            'english' => 'anyone in his right senses',
            'irish' => 'duine ar bith agus a chiall is a chéadfaí aige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'anymore than anyone else',
            'irish' => 'chomh maith le duine eile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'anything but that',
            'irish' => 'gach uile rud ach sin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'anything within reason',
            'irish' => 'rud cothrom ar bith',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it appears to me',
            'irish' => 'feictear dom',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it appears to me',
            'irish' => 'samhlaítear dom',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it appears to be without foundation',
            'irish' => 'is cosúil go bhfuil sé gan bun gan barr',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it appears to be without foundation',
            'irish' => 'is cosúil nach bhfuil bunús ar bith leis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'appearances count',
            'irish' => 'dhá dtrian den damhsa an chosúlacht',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the apple of one’s eye',
            'irish' => 'meall na súile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the apple of one’s eye',
            'irish' => 'úillín óir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'she is the apple of his eye',
            'irish' => 'is grá leis í ná an tsúil atá ina cheann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'she is the apple of his eye',
            'irish' => 'is í an sú súilíneach leis í',
        ]);
        DB::table('phrases')->insert([
            'english' => 'she is the apple of his eye',
            'irish' => 'is measa leis í ná an tsúil atá ina cheann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was the apple of his mother’s eye',
            'irish' => 'ba é súilín óir a mháthar é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'April Fool!',
            'irish' => 'Amadán Aibreáin!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'April Fool!',
            'irish' => 'Amadán earraigh!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'an apt expression',
            'irish' => 'focal tráthúil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'are all the family well?',
            'irish' => 'an bhfuil an comhluadar ar fad go maith?',
        ]);
        DB::table('phrases')->insert([
            'english' => 'are all the family well?',
            'irish' => 'an bhfuil do chúram go maith?',
        ]);
        DB::table('phrases')->insert([
            'english' => 'I’m ___ . You are, I’m sure!',
            'irish' => 'Tá ___ orm. Tá, rud!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'aren’t you a busybody!',
            'irish' => 'nach gnóthach an mhaise duit é!',
        ]);
        DB::table('phrases')->insert([
            'english' => 'aren’t you great ... (in praise)',
            'irish' => 'nach mór a gheibhtear thú ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he would argue a black crow white',
            'irish' => 'chuirfeadh sé an dubh ina gheal ort',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he would argue with his own shadow',
            'irish' => 'chuirfeadh sé dhá cheann na coille ar a chéile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he would cause a row with anybody',
            'irish' => 'chuirfeadh sé dhá cheann na coille ar a chéile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'an armchair critic',
            'irish' => 'iománaí ar an chlaí',
        ]);
        DB::table('phrases')->insert([
            'english' => 'armed to the teeth',
            'irish' => 'armáilte go dtí na cluasa',
        ]);
        DB::table('phrases')->insert([
            'english' => 'armed to the teeth',
            'irish' => 'armáilte ó bhun go barr',
        ]);
        DB::table('phrases')->insert([
            'english' => 'armed to the teeth',
            'irish' => 'faoi iomlán airm',
        ]);
        DB::table('phrases')->insert([
            'english' => 'around about ... (approximately)',
            'irish' => 'ag ballaíocht ar ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'around about ... (approximately)',
            'irish' => 'amach is isteach ar ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'around about ... (approximately)',
            'irish' => 'tuairim ar ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he arrived safely',
            'irish' => 'bhain sé cuan agus caladh amach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'art for art’s sake',
            'irish' => 'ealaín ar mhaithe leis an ealaín',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the artful deceiver',
            'irish' => 'an cealgaire cleasach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the artful deceiver',
            'irish' => 'an cluanaí cleasach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'the artful deceiver',
            'irish' => 'an mealltóir beartach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as an act of charity',
            'irish' => 'mar ghrá Dé',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as aggressive as a brooding hen',
            'irish' => 'chomh colgach le cearc ghoir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as aggressive as a cat',
            'irish' => 'chomh colgach le cat',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as aggressive as a rooster',
            'irish' => 'chomh colgach le coileach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as agile as Caoilte',
            'irish' => 'chomh lúfar le Caoilte',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as agile as a hound',
            'irish' => 'chomh lúfar le cú',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as agile as a sparrow',
            'irish' => 'chomh lúfar le gealbhan',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as agile as a trout',
            'irish' => 'chomh lúfar le breac',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as alike as two salmon',
            'irish' => 'chomh cosúil le dhá scadán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as similar as two salmon',
            'irish' => 'chomh cosúil le dhá scadán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as alike as two horses’ heads ',
            'irish' => 'chomh cosúil le dhá cheann capaill',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as alike as two mares',
            'irish' => 'chomh cosúil le dhá beithigh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as alive as a bee',
            'irish' => 'chomh beo le beach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bad as all that',
            'irish' => 'chomh holc sin amach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bad as a widow’s curse and an orphan’s tear',
            'irish' => 'chomh holc le mallacht baintrí agus deor dílleachta',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bald as a coot',
            'irish' => 'chomh maol leis an tuairnín',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bald as a hornless cow',
            'irish' => 'chomh maol le bó gan adharc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bald as the striker of a flail',
            'irish' => 'chomh maol le buailteán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bare as the floor of the house',
            'irish' => 'chomh lom le hurlár an tí',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bare as a naked bum',
            'irish' => 'chomh lom le tóin tharnocht',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bare as the palm of my hand',
            'irish' => 'chomh lom le croí mo bhoise',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bare as the palm of my hand',
            'irish' => 'chomh lom le mo bhos',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as beautiful as the clear day',
            'irish' => 'chomh hálainn leis an lá bán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as beautiful as ever was seen',
            'irish' => 'chomh hálainn is a d’iarrfadh do shúil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as big as Fionn Mac Cumhaill',
            'irish' => 'chomh mór le Fionn Mac Cumhaill',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as big as my boot (of potatoes, etc.)',
            'irish' => 'chomh fada le mo bhróg',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as big as potatoes listening to the old man (of eyes)',
            'irish' => 'chomh mór le prátaí ag éisteacht leis an seanduine',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as big as seed potatoes (of hailstones)',
            'irish' => 'chomh mór le póiríní prátaí',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bitter as bitter herb',
            'irish' => 'chomh searbh le searbhán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bitter as brine',
            'irish' => 'chomh goirt leis an tsáile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bitter as red berries',
            'irish' => 'chomh géar le caora dearga',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bitter as wild garlic',
            'irish' => 'chomh géar le creamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as a beetle',
            'irish' => 'chomh dubh leis an daol',
        ]);
        DB::table('phrases')->insert([
            'english' => 'jet-black',
            'irish' => 'chomh dubh leis an daol',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as a berry (in the autumn)',
            'irish' => 'chomh dubh le sméar (san fhómhar)',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as your boot',
            'irish' => 'chomh dubh le sméar (san fhómhar)',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as the bottom of a pot',
            'irish' => 'chomh dubh le tóin corcáin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as charcoal',
            'irish' => 'chomh dubh le gualach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as the chimney hole',
            'irish' => 'chomh dubh le cloich a’ bhaic',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as the chimney hole',
            'irish' => 'chomh dubh le poll an bhaic',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as coal',
            'irish' => 'chomh dubh le gual',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as a crow',
            'irish' => 'chomh dubh le préachán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as the devil',
            'irish' => 'chomh dubh leis an diabhal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as ebony',
            'irish' => 'chomh dubh le héabann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as Erebus',
            'irish' => 'chomh dubh le Poll Tí Liabáin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as the feather of a raven (of hair)',
            'irish' => 'chomh dubh le cleite an fhéich',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as a hanging',
            'irish' => 'chomh dubh leis an chrochadh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as the hob',
            'irish' => 'chomh dubh leis an iarta',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as a hole',
            'irish' => 'chomh dorcha le poll',
        ]);
        DB::table('phrases')->insert([
            'english' => 'pitch black',
            'irish' => 'chomh dorcha le poll',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s not as black as he is painted',
            'irish' => 'níl sé chomh dona lena thuairisc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as pitch',
            'irish' => 'chomh dubh le pic',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as the Pooka’s bum',
            'irish' => 'chomh dubh le tóin an phúca',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as a raven',
            'irish' => 'chomh dubh leis an fhiach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as a sloe',
            'irish' => 'chomh dubh le hairne',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as a sloe',
            'irish' => 'chomh dubh leis an airne',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as soot',
            'irish' => 'chomh dubh leis an mbac',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as soot',
            'irish' => 'chomh dubh leis an tsúiche',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as black as soot',
            'irish' => 'chomh dubh le súiche',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he looked as black as thunder (bad tempered, displeased)',
            'irish' => 'tháinig néal crochadóra air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as blind as a bat',
            'irish' => 'comhsholas lá agus oíche dó',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as blind as a bat',
            'irish' => 'tá sé chomh caoch le smután',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as blind as a bat',
            'irish' => 'tá sé chomh caoch le creabhar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as blind as a bat',
            'irish' => 'tá sé chomh dall le creabhar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as blind drunk as a rabbit',
            'irish' => 'chomh dall ar meisce le coinín',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as blind as the bottom of my foot',
            'irish' => 'chomh dall le bonn mo choise',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as blind as the sole of my shoe',
            'irish' => 'chomh caoch le bonn mo bhróige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as blue as the sky',
            'irish' => 'chomh gorm le smál',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as blue as the sky',
            'irish' => 'chomh gorm leis an spéir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bold as brass',
            'irish' => 'chomh dána le muc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bold as the devil',
            'irish' => 'chomh dána leis an diabhal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bold as a cat',
            'irish' => 'chomh dalba le cat',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as brave / valiant as Fionn Mac Cumhaill',
            'irish' => 'chomh calma le Fionn Mac Cumhaill',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bright as a button',
            'irish' => 'chomh geal le criostal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as bright as a button',
            'irish' => 'chomh geal le cúr sceite',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as broad as a currach (of man’s back)',
            'irish' => 'chomh leathan le currach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as broad as a door-leaf / shutter (of a person)',
            'irish' => 'chomh leathan le comhla',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s as broad as it’s long',
            'irish' => 'aon rud amháin sa deireadh é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s as broad as it’s long',
            'irish' => 'tá sé comhfhad comhleithead',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as brown as a berry',
            'irish' => 'chomh donn le sméar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as brown as a nut',
            'irish' => 'chomh donn le cnó',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as busy as an ant',
            'irish' => 'chomh gnóthach le seangán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as busy as a bee',
            'irish' => 'chomh díbhirceach le beach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as busy as a bee',
            'irish' => 'chomh saothrach le beach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as busy as a carding woman between two spinners',
            'irish' => 'chomh gnóitheach le bean cardaí idir dhá abhras',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as busy as a pots woman at a fair',
            'irish' => 'chomh gnóitheach le bean potaí ar aonach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as busy as a man on a shilling an hour',
            'irish' => 'chomh gnóitheach le fear a mbeadh scilling san uair aige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as busy as a nailer',
            'irish' => 'chomh gnóitheach le tairneoir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as calm as a cucumber',
            'irish' => 'chomh ciúin le linn',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as calm as a cucumber',
            'irish' => 'ciúin mar linn',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as calm as a pond',
            'irish' => 'chomh ciúin le linn',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as calm as a pond',
            'irish' => 'ciúin mar linn',
        ]);
        DB::table('phrases')->insert([
            'english' => '... as calm as a mill-pond',
            'irish' => '... ina clár',
        ]);
        DB::table('phrases')->insert([
            'english' => '... as calm as a mill-pond',
            'irish' => '... ina léinseach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cantankerous as a cat',
            'irish' => 'chomh cantalach le dris',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cantankerous as a cat',
            'irish' => 'chomh feargach le cat',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as carefree as the cuckoo',
            'irish' => 'chomh neamhbhuartha leis an chuach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as carefree as a youth',
            'irish' => 'chomh haigeanta le buachaill óg',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as carefree as a starling',
            'irish' => 'chomh haerach le druid',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as carefree as a sparrow',
            'irish' => 'homh haerach le gealbhan',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as carefree as a sparrow',
            'irish' => 'chomh héasca le gealbhan',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as chance may have it',
            'irish' => 'de réir mar a thitfidh amach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as chance would have it',
            'irish' => 'de thapa na huaire',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cheerful as a lark',
            'irish' => 'chomh croíúil le fuiseog',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as hearty as a lark',
            'irish' => 'chomh croíúil le fuiseog',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cherished by him as the eye in his head',
            'irish' => 'chomh cúramach aige leis an tsúil a bhí istigh ina cheann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a new pin',
            'irish' => 'chomh glan le criostal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a new pin',
            'irish' => 'chomh geal le hairgead',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a new pin',
            'irish' => 'chomh glan le pionna úr',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a new pin',
            'irish' => 'chomh glan le sé pingine (úr)',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a whistle',
            'irish' => 'chomh glan le criostal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a whistle',
            'irish' => 'chomh geal le hairgead',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a whistle',
            'irish' => 'chomh glan le pionna úr',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a whistle',
            'irish' => 'chomh glan le sé pingine (úr)',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clean as a pig that was to be slaughtered (of clean-shaven person)',
            'irish' => 'chomh scríobtha le muc a bheadh le marú',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clear as crystal',
            'irish' => 'chomh glan le criostal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clear as crystal',
            'irish' => 'chomh soiléir le criostal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clear as day',
            'irish' => 'chomh soiléir leis an lá geal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clear as ditch-water',
            'irish' => 'chomh doiléir lena bhfaca tú riamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s as clear as mud',
            'irish' => 'ní thuigfeadh aon duine é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s as clear as mud',
            'irish' => 'níl léamh ná tuiscint air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s as clear as mud',
            'irish' => 'tá sé chomh doiléir le ceo tiubh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clear as the noonday sun',
            'irish' => 'chomh soiléir le grian an mheán lae',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clear as spring water',
            'irish' => 'chomh glan le fíoruisce',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as clear as the summer sun',
            'irish' => 'chomh soiléir le grian an tsamhraidh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as you can clearly see',
            'irish' => 'mar is follasach duit',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cold as a corpse',
            'irish' => 'chomh fuar le corp',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cold as frost',
            'irish' => 'chomh fuar le sioc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cold as ice',
            'irish' => 'chomh fuar le sioc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cold as death',
            'irish' => 'chomh fuar leis an éag',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cold as the grave',
            'irish' => 'chomh fuar leis an uaigh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cold as an icicle',
            'irish' => 'chomh fuar le bior oighir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'they are as common as blackberries',
            'irish' => 'tá siad chomh tiubh le gaineamh na trá',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as common as domestic dogs',
            'irish' => 'chomh coitianta le madaidh baile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as common as muck',
            'irish' => 'tá sé chomh mímhúinte le muc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as conceited as the cuckoos',
            'irish' => 'chomh leitheadach leis na cuacha',
        ]);
        DB::table('phrases')->insert([
            'english' => '... as cool as you please',
            'irish' => '... gan a dhath mairge',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as cool as a cucumber',
            'irish' => 'is é an fuarthé é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as cool as a cucumber',
            'irish' => 'ní féidir corraí a bhaint as',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as cool as a cucumber',
            'irish' => 'ní fhéadfaí corraí a bhaint as',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was as cool as a cucumber',
            'irish' => 'níor thit eite as a sciatháin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as courageous as Cúchulainn',
            'irish' => 'chomh cróga le Cúchulainn',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as courageous as Cúchulainn',
            'irish' => 'chomh móruchtúil le Cúchulainn',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as crafty as a cat',
            'irish' => 'chomh seanaimseartha le cat',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as crafty as Finn',
            'irish' => 'chomh cleasach le Fionn',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as crafty as his grandfather',
            'irish' => 'chomh seanaimseartha lena athair mór',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as crafty / clever / cunning / shrewd as a lawman',
            'irish' => 'chomh glic le fear dlí',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as crooked as a cat’s hind leg',
            'irish' => 'chomh cam le cois deiridh cait',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as crooked as a dog urinating on snow',
            'irish' => 'chomh cam le madadh ag mún ar shneachta',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as crooked as a dog’s penis',
            'irish' => 'chomh cam le bod madaidh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as crooked as a gambler',
            'irish' => 'chomh cam le cearrbhach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as crooked as the hind thigh of a dog',
            'irish' => 'chomh cam le láirig dheiridh mhadaidh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as crooked as a hurling stick',
            'irish' => 'chomh cam le camán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as crooked as a ram’s horn',
            'irish' => 'chomh cam le hadharc reithe',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as crooked as a ram’s horn',
            'irish' => 'chomh casta le hadharc reithe',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as crooked as a sickle',
            'irish' => 'chomh cam le corrán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as crooked as a twisting sand-eel',
            'irish' => 'chomh cam le corr chasta',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cross as two sticks',
            'irish' => 'chomh cantalach le dris',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cross as two sticks',
            'irish' => 'chomh crosta le mála easóg',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cross as a bear',
            'irish' => 'chomh cantalach le dris',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cross as a bear',
            'irish' => 'chomh crosta le mála easóg',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cross as a badger',
            'irish' => 'chomh míshásta le broc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as the crow flies',
            'irish' => 'díreach trasna na tíre',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cunning / sly as a fox',
            'irish' => 'chomh cleasach le madadh rua',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cunning / sly as a fox',
            'irish' => 'chomh críonna le sionnach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cunning / sly as a fox',
            'irish' => 'chomh glic le sionnach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as is customary',
            'irish' => 'mar is gnách',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as is customary with him',
            'irish' => 'mar is gnách leis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cute as they make them (sly)',
            'irish' => 'chomh glic lena bhfaca tú riamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dark as a bog hole',
            'irish' => 'chomh dorcha le poll móna',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dark as the bottom of a hole',
            'irish' => ' chomh dorcha le tóin poill',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dark as a dungeon',
            'irish' => ' chomh dorcha le tóin poill',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dark as the bottom of the pot',
            'irish' => 'chomh dorcha le tóin an phota',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dark as could be',
            'irish' => 'chomh dubh le pic',
        ]);
        DB::table('phrases')->insert([
            'english' => 'in complete darkness',
            'irish' => 'chomh dubh le pic',
        ]);
        DB::table('phrases')->insert([
            'english' => 'pitch- dark',
            'irish' => 'chomh dubh le pic',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dark as midnight',
            'irish' => 'chomh dorcha leis an mheánoíche',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dark as a turf bank',
            'irish' => 'chomh dorcha le bachta móna',
        ]);
        DB::table('phrases')->insert([
            'english' => 'so dark you couldn’t put a finger in your eye',
            'irish' => 'chomh dorcha agus nár léir duit méar a chur i do shúil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dead as a corpse',
            'irish' => 'chomh marbh le corp',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dead as a / the dodo',
            'irish' => 'chomh marbh le scadán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dead as a herring',
            'irish' => 'chomh marbh le scadán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dead as a door-nail',
            'irish' => 'chomh marbh le hAnraí a hocht',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dead as a door-nail',
            'irish' => 'chomh marbh le hArt',
        ]);
        DB::table('phrases')->insert([
            'english' => ' as dead as mutton',
            'irish' => 'chomh marbh le hAnraí a hocht',
        ]);
        DB::table('phrases')->insert([
            'english' => ' as dead as mutton',
            'irish' => 'chomh marbh le hArt',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dead as a skate',
            'irish' => 'chomh marbh le sciata',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as deaf as a (door-) post',
            'irish' => 'chomh bodhar le bata',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as deaf as a (door-) post',
            'irish' => 'chomh bodhar le bodhrán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as deaf as a (door-) post',
            'irish' => 'chomh bodhar le cloch',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as deaf as a (door-) post',
            'irish' => 'chomh bodhar le slis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as deaf as a doornail',
            'irish' => 'chomh bodhar le bata',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as deaf as a doornail',
            'irish' => 'chomh bodhar le bodhrán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as deaf as a doornail',
            'irish' => 'chomh bodhar le cloch',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as deaf as a doornail',
            'irish' => 'chomh bodhar le slis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'stone-deaf',
            'irish' => 'chomh bodhar le bata',
        ]);
        DB::table('phrases')->insert([
            'english' => 'stone-deaf',
            'irish' => 'chomh bodhar le bodhrán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'stone-deaf',
            'irish' => 'chomh bodhar le cloch',
        ]);
        DB::table('phrases')->insert([
            'english' => 'stone-deaf',
            'irish' => 'chomh bodhar le slis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as deceitful as a tailor',
            'irish' => 'chomh bréagach le táilliúir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as deep as a well',
            'irish' => 'chomh domhain le tobar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as deep as the high tide',
            'irish' => 'chomh domhain leis an lán mara',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as deep as the sea ',
            'irish' => 'chomh domhain leis an fharraige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dependable as the sun ',
            'irish' => 'chomh hionraic leis an ghrian',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as different as chalk and cheese',
            'irish' => 'chomh difriúil le talamh agus spéir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as difficult as a graveyard (terrain difficult to walk on)',
            'irish' => 'chomh hachrannach le reilig',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as difficult to find as a needle in a haystack',
            'irish' => 'chomh deacair le snáthaid a fháil i gcruach féir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dilute as water',
            'irish' => 'chomh lom leis an uisce',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dirty as a badger',
            'irish' => 'chomh salach le broc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dirty as a dog',
            'irish' => 'chomh salach le madadh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dirty as a pig',
            'irish' => 'chomh salach le muc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as discontented as a man who neither won nor lost',
            'irish' => 'chomh míshásta le fear nár bhain is nár chaill',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dishonest as the man who said he saw the grass growing ',
            'irish' => 'chomh bréagach leis an fhear a dúirt go bhfaca sé an féar ag fás',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as drunk as a brick',
            'irish' => 'chomh hólta le bríce',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was as drunk as a fiddler',
            'irish' => 'bhí sé ar na báid',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was as drunk as a fiddler',
            'irish' => 'bhí sé ar stealladh na ngrást',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was as drunk as a lord',
            'irish' => 'bhí sé ar na báid',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was as drunk as a lord',
            'irish' => 'bhí sé ar stealladh na ngrást',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was as drunk as a skunk',
            'irish' => 'bhí sé ar na báid',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was as drunk as a skunk',
            'irish' => 'bhí sé ar stealladh na ngrást',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as drunk as forty cats',
            'irish' => 'chomh hólta le daichead cat',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dry as a basket of lime',
            'irish' => 'homh tirim le bascaed aoil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dry as a bone',
            'irish' => 'chomh tirim le púdar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dry as flour',
            'irish' => 'chomh tirim le plúr',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dry / unappetizing as cliff-grass',
            'irish' => 'chomh tur le féar aille',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dry as lime',
            'irish' => 'chomh tirim le haol',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dry as powder',
            'irish' => 'chomh tirim le púdar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dry as snuff ',
            'irish' => 'chomh tirim le snaois',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dry as snuff ',
            'irish' => 'chomh tirim le snaoisín',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dry as tinder ',
            'irish' => 'chomh tirim le sponc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dry as a thrush’s nest',
            'irish' => 'chomh tirim le nead smólaigh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'bone-dry',
            'irish' => 'tirim sácráilte',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as dumb as an ox',
            'irish' => 'chomh balbh le smután maide',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as early as possible',
            'irish' => 'chomh luath agus is féidir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as early as possible',
            'irish' => 'ar an dá luas',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as easy as anything',
            'irish' => 'chomh furasta lena bhfaca tú ariamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as easy as A B C',
            'irish' => 'chomh furasta lena bhfaca tú ariamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as easy as falling off a log',
            'irish' => 'chomh furasta lena bhfaca tú ariamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s as easy as pie',
            'irish' => 'níl ann ach caitheamh dairteanna',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it would be as easy for you to grab the air as to ... (impossible)',
            'irish' => 'bheadh sé chomh héasca duit breith ar an aer agus ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as eerie as the graveyard',
            'irish' => 'chomh huaigneach leis an reilig',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as empty as a bag',
            'irish' => 'chomh folamh le mála',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as empty as a church without a priest (in card playing)',
            'irish' => 'chomh folamh le teach pobail gan sagart',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as empty as a whistle',
            'irish' => 'chomh folamh le feadóg',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as even as a die',
            'irish' => 'chomh cothrom le dísle',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as the evening wore on ...',
            'irish' => 'de réir mar a bhí an tráthnóna á chaitheamh ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as ever I saw',
            'irish' => 'agus a chonaic mé dhá uair riamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as I ever did see',
            'irish' => 'agus a chonaic mé dhá uair riamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as everyone knows',
            'irish' => 'mar is eol do mhadaidh na sráide',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as everyone knows',
            'irish' => 'mar is eol don saol',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as everyone knows',
            'irish' => 'mar tá’s ag an lá',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as every schoolboy knows',
            'irish' => 'mar is eol do mhadaidh na sráide',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as every schoolboy knows',
            'irish' => 'mar is eol don saol',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as every schoolboy knows',
            'irish' => 'mar tá’s ag an lá',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as false as the devil',
            'irish' => 'chomh bréagach leis an diabhal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as the fancy takes him',
            'irish' => 'de réir mar atá sé d’fhonn air',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as I remember',
            'irish' => 'a fhad is is cuimhin liom',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as I remember',
            'irish' => 'ar feadh mo chuimhne',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as I recollect',
            'irish' => 'a fhad is is cuimhin liom',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as I recollect',
            'irish' => 'ar feadh mo chuimhne',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far back as I can remember',
            'irish' => 'is é mo chianchuimhne é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far back as I can remember',
            'irish' => 's é mo sheanchuimhne é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as I understand it ',
            'irish' => 'ar feadh gur léir dom é',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as I understand it ',
            'irish' => 'de réir m’eolais',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as is possible',
            'irish' => 'chomh fada agus is féidir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as is feasible',
            'irish' => 'chomh fada agus is féidir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as you can (is possible)',
            'irish' => 'chomh fada agus atá ar do chumas',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as that goes ...',
            'irish' => 'chomh fada leis sin de ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as I’m concerned',
            'irish' => 'i dtaca liomsa de',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as I’m concerned',
            'irish' => 'i mo chora féin de',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as I’m concerned',
            'irish' => 'i mo churtha féin de',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as that’s concerned',
            'irish' => 'i dtaca le sin de',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as the eye can see',
            'irish' => 'fad amhairc (uaim)',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as the eye can see',
            'irish' => 'fad radhairc (uaim)',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as the eye can see',
            'irish' => 'fad d’amhairc uait',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as the eye can see',
            'irish' => 'fad do radharc uait',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as far as the eye can see',
            'irish' => 'eadh radhairc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as a fairy wind',
            'irish' => 'mar bheadh séideán sí ann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as a hare ',
            'irish' => 'chomh gasta le giorria',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as a hare ',
            'irish' => 'chomh luath le giorria',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as a hare ',
            'irish' => 'chomh tapa le giorria',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as lightning',
            'irish' => 'ar an dá luas; chomh gasta le luas lasrach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as lightning',
            'irish' => 'chomh gasta le splanc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as you can',
            'irish' => 'chomh tiubh géar is a thig leat',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as you can',
            'irish' => 'chomh luath géar is a thig leat',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as he could (dash off)',
            'irish' => 'de spalpadh reatha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he ran as fast as he could',
            'irish' => 'd’imigh sé ina tháinrith',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he ran as fast as he could',
            'irish' => 'rith sé an méid a bhí ina anam',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he ran as fast as he could',
            'irish' => 'rith sé an méid a bhí ina cheithre chnámha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he ran as fast as he could',
            'irish' => 'rith sé an méid a bhí ina chnámha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he ran as fast as he could',
            'irish' => 'rith sé an méid a bhí ina chorp',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he ran as fast as he could',
            'irish' => 'rith sé an méid a bhí ina chosa',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he ran as fast as he could',
            'irish' => 'rith sé an méid a bhí ina chraiceann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he ran as fast as he could',
            'irish' => 'rith sé chomh gasta le gaoth Mhárta',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he ran as fast as he could',
            'irish' => 'rith sé chomh géar agus a bhí sé ina chosa',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he ran as fast as he could',
            'irish' => 'rith sé chomh tiubh géar agus a bhí ina chorp',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he ran as fast as he could',
            'irish' => 'rith sé chomh tiubh géar is a thiocfadh leis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he ran as fast as he could',
            'irish' => 'rith sé in ainm an diabhail',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he ran as fast as he could',
            'irish' => 'rith sé mar a bheadh tine ar a chraiceann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he ran as fast as he could',
            'irish' => 'rith sé mar an ghaoth Mhárta',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as his legs could carry him',
            'irish' => 'd’imigh sé ina tháinrith',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as his legs could carry him',
            'irish' => 'rith sé an méid a bhí ina anam',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as his legs could carry him',
            'irish' => 'rith sé an méid a bhí ina cheithre chnámha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as his legs could carry him',
            'irish' => 'rith sé an méid a bhí ina chnámha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as his legs could carry him',
            'irish' => 'rith sé an méid a bhí ina chorp',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as his legs could carry him',
            'irish' => 'rith sé an méid a bhí ina chosa',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as his legs could carry him',
            'irish' => 'rith sé an méid a bhí ina chraiceann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as his legs could carry him',
            'irish' => 'rith sé chomh gasta le gaoth Mhárta',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as his legs could carry him',
            'irish' => 'rith sé chomh géar agus a bhí sé ina chosa',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as his legs could carry him',
            'irish' => 'rith sé chomh tiubh géar agus a bhí ina chorp',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as his legs could carry him',
            'irish' => 'rith sé chomh tiubh géar is a thiocfadh leis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as his legs could carry him',
            'irish' => 'rith sé in ainm an diabhail',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as his legs could carry him',
            'irish' => 'rith sé mar a bheadh tine ar a chraiceann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as his legs could carry him',
            'irish' => 'rith sé mar an ghaoth Mhárta',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fast as the wind',
            'irish' => 'chomh gasta leis an ghaoth',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fat as a barrel',
            'irish' => 'chomh ramhar le bairille',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fat as a fool',
            'irish' => 'chomh ramhar le rón',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fat as a lion',
            'irish' => 'chomh ramhar le leon',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fat as a minister ',
            'irish' => 'chomh ramhar le ministir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as fat as an ox',
            'irish' => 'tá sé chomh ramhar le mart',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as fat as an ox',
            'irish' => 'tá sé ina dhámh le feoil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fat as a pig',
            'irish' => 'chomh ramhar le muc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fine as ever was seen',
            'irish' => 'chomh breá is a chonaic súil ariamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fine as flour',
            'irish' => 'chomh mion le plúr',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fine as Indian meal',
            'irish' => 'chomh mion le min bhuí',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fine as a riddle / sieve',
            'irish' => 'chomh mion le rideal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fine as tobacco',
            'irish' => 'chomh mion le tobac',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as firm as a rock',
            'irish' => 'chomh daingean le carraig',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as firm as a rock',
            'irish' => 'chomh daingean le creag',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fit as a fiddle',
            'irish' => 'chomh folláin le breac',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fit as a fiddle',
            'irish' => 'chomh folláin le fia',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fit as a fiddle',
            'irish' => 'chomh lúfar le fia',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was as fit as a fiddle ',
            'irish' => 'bhí sláinte an bhradáin aige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was as fit as a fiddle ',
            'irish' => 'bhí sláinte an bhric aige',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as flat as a pancake',
            'irish' => 'ina leircíneach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fleet as a deer',
            'irish' => 'chomh sciobtha le fia',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fleet as a deer',
            'irish' => 'chomh lúfar le fia',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fleet as a deer',
            'irish' => 'chomh lúfar le fia barr',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fleet as a doe',
            'irish' => 'chomh héadrom le heilit',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fleet as a doe',
            'irish' => 'chomh lúfar le heilit',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fleet as a hare',
            'irish' => 'chomh gasta le giorria',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fleet as a hare',
            'irish' => 'chomh luath le giorria',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as for that ...',
            'irish' => 'chomh fada leis sin de ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as foul / rotten as a pig',
            'irish' => 'chomh bréan le muc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as foul / rotten as a pig’s fart',
            'irish' => 'chomh bréan le tufóig muice',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as free as a bird ',
            'irish' => 'ag imeacht le scód',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fresh as a daisy',
            'irish' => 'chomh haibí le huan',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fresh as a daisy',
            'irish' => 'chomh húr le haer na maidine',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fresh as a daisy',
            'irish' => 'chomh húr le nóinín',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fresh as a daisy',
            'irish' => 'go pioctha péacach (tidy)',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as fresh as a lark',
            'irish' => 'chomh beo le fuiseog',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as frisky as a kid (kid goat)',
            'irish' => 'chomh haigeanta le meannán gabhair',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as frisky as a kid (kid goat)',
            'irish' => 'chomh héasca le meannán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as frisky as a hare',
            'irish' => 'chomh meidhreach le giorria',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as full as can be',
            'irish' => 'chomh lán le mála píbe chomh líonta le frog fómhair',
        ]);
        DB::table('phrases')->insert([
            'english' => '(with food) as full as a wake house ',
            'irish' => 'chomh lán le teach faire',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as full as a wick',
            'irish' => 'chomh lán le fáideog',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as full as the river (drunk)',
            'irish' => 'chomh lán leis an abhainn', 
        ]);
        DB::table('phrases')->insert([
            'english' => 'as a general rule',
            'irish' => 'de ghnáth',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as a general rule',
            'irish' => 'mar ghnáthriail',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as gentle as an angel',
            'irish' => 'chomh macánta le haingeal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as gentle as an angel',
            'irish' => 'chomh mín mánla le haingeal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as gentle as a lamb',
            'irish' => 'chomh modhúil le huan caorach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as God is my judge',
            'irish' => 'breithiúnas Dé ar m’anam',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as God is my judge',
            'irish' => 'fios Dé',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as God is my judge',
            'irish' => 'idir mise is Dia',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s as good as done',
            'irish' => 'tá sé ionann is déanta',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as good as gold',
            'irish' => 'chomh socair le huan',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as good as gold',
            'irish' => 'chomh suaimhneach le huan caorach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it was as good as it gets',
            'irish' => 'ní bheadh a shárú le fáil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as good luck would have it',
            'irish' => 'ar ámharaí an tsaoil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as good luck would have it',
            'irish' => 'mar bhí Dia leis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as good as the next (person)',
            'irish' => 'chomh maith le duine',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he was as good as his word',
            'irish' => 'chuir sé lena fhocal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as green as cabbage',
            'irish' => 'chomh glas leis an chál',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as green as grass',
            'irish' => 'chomh glas leis an fhéar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as green as grass',
            'irish' => 'chomh gorm leis an fhéar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as green as grass',
            'irish' => 'chomh huaine leis an fhéar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as green as holly ',
            'irish' => 'chomh glas le cuileann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as green as springing corn',
            'irish' => 'chomh glas le geamhar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as grey as a badger',
            'irish' => 'chomh liath le broc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as grey as a cat ',
            'irish' => 'chomh liath le cat',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as grey as an eagle',
            'irish' => 'chomh liath leis an iolar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as grey as the mist ',
            'irish' => 'chomh liath leis an gceo',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as grey as a mouse',
            'irish' => 'chomh liath le luch',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as happy as a lark',
            'irish' => 'chomh héasca le gealbhan',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as happy as a lark',
            'irish' => 'chomh meidhreach le dreoilín teaspaigh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as happy as a lark',
            'irish' => 'chomh neamhbhuartha leis an fhuiseog',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as happy as the day is long',
            'irish' => 'tá sé ar a sháimhín suilt',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as happy as the day is long',
            'irish' => 'tá sé chomh suáilceach is atá an lá fada',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as hard as he can (working etc.)',
            'irish' => 'ar a mhíle dícheall',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as hard as he can (working etc.)',
            'irish' => 'ar theann a anama',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as hard as he can (working etc.)',
            'irish' => 'ar theann a dhíchill',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as hard as he could (quickly)',
            'irish' => 'chomh tapaidh agus bhí ina chumas',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as hard as a crag',
            'irish' => 'chomh crua le creag',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as hard as a goat’s horn (referring to an object / material)',
            'irish' => 'chomh crua le hadharc gabhair',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as hard as the hob',
            'irish' => 'chomh crua leis an bhac',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as hard as nails',
            'irish' => 'chomh crua le cloch',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as hard as nails',
            'irish' => 'chomh crua leis an iarann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as hard as nails',
            'irish' => 'níl trócaire ar bith ann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as hard as nails (merciless)',
            'irish' => 'tá an miotal ina chnámha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as hard as nails (strong)',
            'irish' => 'tá miotal ar leith ann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as hard as a ram’s horn',
            'irish' => 'chomh crua le hadharc reithe',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as hard as a rock',
            'irish' => 'chomh crua le carraig',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s as hard as a rock',
            'irish' => 'tá sé ina charraig le cruas',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s as hard to kill as a cat',
            'irish' => 'tá sé chomh do- mharaithe le cat',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as hardy as a goat ',
            'irish' => 'chomh crua le gabhar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as hardy as a spring hare',
            'irish' => 'chomh crua le giorria earraigh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as healthy as a deer',
            'irish' => 'homh folláin le fia',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as healthy as a dogfish',
            'irish' => 'chomh folláin le madadh garbh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as healthy as a salmon',
            'irish' => 'chomh folláin le bradán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as healthy as the slender salmon',
            'irish' => 'chomh folláin leis an mbradán seang',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as healthy as a trout',
            'irish' => 'chomh folláin le breac',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as healthy as ever',
            'irish' => 'chomh folláin is a bhí riamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as healthy as ever',
            'irish' => 'chomh folláin le riamh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as hearty as a lark',
            'irish' => 'chomh croíúil le fuiseog',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as cheerful as a lark',
            'irish' => 'chomh croíúil le fuiseog',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as heavy as a crab',
            'irish' => 'chomh trom le portán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as high as a hill',
            'irish' => 'chomh hard le cnoc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as high as the boat',
            'irish' => 'chomh hard leis an árthach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as high as the chimney',
            'irish' => 'chomh hard leis an simléar',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as high as the house',
            'irish' => 'chomh hard leis an teach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as high as the lintel',
            'irish' => 'chomh hard leis an ardoras',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as high as the moon',
            'irish' => 'chomh hard leis an ghealach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as high as the side of the house',
            'irish' => 'chomh hard le taobh an tí',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as holed as a grate',
            'irish' => 'chomh pollta le gráta',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as honest as a priest ',
            'irish' => 'homh cneasta le sagart',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as honest as a priest ',
            'irish' => 'chomh cneasta leis an sagart',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as honest as the day is long',
            'irish' => 'chomh cneasta leis an ubh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as honest as the day is long',
            'irish' => 'chomh fíor leis an ghrian',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as honest as the day is long',
            'irish' => 'chomh hionraic leis an ghealach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as honest as the day is long',
            'irish' => 'chomh hionraic leis an ghrian',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as hot as a fire',
            'irish' => 'chomh te le tine',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as idle as sin',
            'irish' => 'homh díomhaoin le lúidín an phíobaire',
        ]);
        DB::table('phrases')->insert([
            'english' => 'at a complete loose end',
            'irish' => 'homh díomhaoin le lúidín an phíobaire',
        ]);
        DB::table('phrases')->insert([
            'english' => ' as if ...',
            'irish' => 'amhail is ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s as if ...',
            'irish' => 'tá sé mar a bheadh ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as if by magic',
            'irish' => 'mar a bheadh draíocht ann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as if his life depended on it',
            'irish' => 'mar bheadh Dia á rá leis',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as if nothing had happened',
            'irish' => 'mar nach mbeadh a dhath riamh de',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as if to say (that) ...',
            'irish' => 'ionann is a rá ...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as if to say (that) ...',
            'irish' => 'a rá is de go...',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as if he’d won the pools',
            'irish' => 'agus dá bhfaighfeadh sé bó',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as ill-luck would have it',
            'irish' => 'ar bhotúnaí an tsaoil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as ill-luck would have it',
            'irish' => 'ar mhí-ámharaí an tsaoil',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as ill-luck would have it',
            'irish' => 'de bharr ar an mí-ádh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as ill-luck would have it',
            'irish' => 'faoi mar a bheadh an nimh ar an aithne',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as ill-luck would have it',
            'irish' => 'mar bharr ar an donas',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as ill-luck would have it',
            'irish' => 'mar bharr ar an mhí-ádh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as ill-luck would have it',
            'irish' => 'mar bharr ar an tubaiste',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as innocent as a baby',
            'irish' => 'chomh neamhurchóideach le leanbh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as innocent as a baptized baby',
            'irish' => 'chomh neamhchoireach le leanbh baiste',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as innocent as a lamb',
            'irish' => 'chomh soineanta le huan',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as innocent as a new-born baby',
            'irish' => 'chomh soineanta leis an leanbh a rugadh aréir',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as Irish as the pigs of Drogheda',
            'irish' => 'chomh Gaelach le muca Dhroichead Átha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as jumpy as a flea',
            'irish' => 'chomh luaineach le dreancaid',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as keen as mustard',
            'irish' => 'chomh díbhirceach le beach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as knowledgeable as a learned / wise man ',
            'irish' => 'chomh heolach le saoi',
        ]);
        DB::table('phrases')->insert([
            'english' => '... as is well known',
            'irish' => '... mar is eol do chách',
        ]);
        DB::table('phrases')->insert([
            'english' => '... as is well known',
            'irish' => '... mar is eol don saol',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as lame as a lump of wood',
            'irish' => 'chomh creapalta le smután maide',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as large as life',
            'irish' => 'de thomhas nádúrtha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as large as life (of statue, etc.)',
            'irish' => 'de thomhas nádúrtha idir chorp agus anam',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as large as life (of person)',
            'irish' => 'de thomhas nádúrtha ina steillebheatha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as a last resort',
            'irish' => 'mar bheart in am na héigne',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as a last resort',
            'irish' => 'go sáirí air/ uirthi [srl.]',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as lazy as an ass',
            'irish' => 'chomh falsa le hasal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as lazy as an ass',
            'irish' => 'chomh leisciúil le hasal',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as lazy as a pig',
            'irish' => 'chomh falsa le muc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as lazy as a pig',
            'irish' => 'chomh leisciúil le muc',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as lazy as sin',
            'irish' => 'ag leá as a chéile le falsacht',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as level as a dice',
            'irish' => 'chomh cothrom le dísle',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as light as a feather',
            'irish' => 'chomh héadrom le cleite',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as light as a feather',
            'irish' => 'chomh héadrom le sop',
        ]);
        DB::table('phrases')->insert([
            'english' => 'he’s as light as a feather',
            'irish' => 'ní mheánn sé brobh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s as light as a feather',
            'irish' => 'níl péas cleite ann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as light on his feet as a sparrow',
            'irish' => 'chomh héadrom ar a chois le gealbhán',
        ]);
        DB::table('phrases')->insert([
            'english' => '... as you like',
            'irish' => '... mar is áil leat féin',
        ]);
        DB::table('phrases')->insert([
            'english' => '... as you like',
            'irish' => 'mar is fearr leat féin',
        ]);
        DB::table('phrases')->insert([
            'english' => '... as you like',
            'irish' => '... mar is maith leat féin',
        ]);
        DB::table('phrases')->insert([
            'english' => '... as you like',
            'irish' => '... mar is mian leat féin',
        ]);
        DB::table('phrases')->insert([
            'english' => 'they’re as like as two peas (in a pod) ',
            'irish' => 'tá siad chomh cosúil le chéile le dhá scadán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'they’re as like as two peas (in a pod) ',
            'irish' => 'tá siad mar a sceithfeadh fíogach fíogach eile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as likely as not',
            'irish' => 'chomh dealraitheach lena athrach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as likely as not',
            'irish' => 'chomh dócha lena athrach',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as likely as not',
            'irish' => 'chomh dóiche le rud eile',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as likely as not',
            'irish' => 'lán chomh dóiche',
        ]);
        DB::table('phrases')->insert([
            'english' => 'it’s as likely as not ',
            'irish' => 'ní móide rud de',
        ]);
        DB::table('phrases')->insert([
            'english' => 'I feel as limp as a rag',
            'irish' => 'níl anam ná brí ionam',
        ]);
        DB::table('phrases')->insert([
            'english' => 'I feel as limp as a rag',
            'irish' => 'táim sleabhctha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as lithe as an eel ',
            'irish' => 'chomh humhal le heascann',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as lithe as a hound',
            'irish' => 'chomh ligthe le cú',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as lithe as a hound',
            'irish' => 'chomh lúfar le cú',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as lively as a cricket',
            'irish' => 'chomh luaineach le dreancaid',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as lively as a kid',
            'irish' => 'chomh haerach le meannán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as lively as a kitten',
            'irish' => 'chomh beo le heasóg',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as lively as a trout',
            'irish' => 'chomh beo le breac',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as lively as a trout',
            'irish' => 'chomh folláin le breac',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as lonely as a / the graveyard',
            'irish' => 'chomh huaigneach le cill',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as lonely as a / the graveyard',
            'irish' => 'chomh huaigneach leis an reilig',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as I can remembe',
            'irish' => 'le mo chuimhne',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as I live',
            'irish' => 'fad a mhairim',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as I live',
            'irish' => 'fad is beo mé',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as I live',
            'irish' => 'go dtaga adhmad orm',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as I live',
            'irish' => 'go ndúna an clár orm',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as I live',
            'irish' => 'go ndúna béal na huaighe orm',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as I live',
            'irish' => 'go scara m’anam le mo chorp',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as I live',
            'irish' => 'le mo bheo',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as I live',
            'irish' => 'le mo mharthain',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as I live',
            'irish' => 'le mo ré',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as my arm',
            'irish' => 'chomh fada le mo sciathán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as an oar (of a long word)',
            'irish' => 'chomh fada le maide rámha',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as a shovel’s handle',
            'irish' => 'chomh fada le crann sluaiste',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as a slow-coming midday',
            'irish' => 'chomh fadálach le meán lae mall',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as a summer’s day',
            'irish' => 'chomh fada le lá samhraidh',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as a turf-spade',
            'irish' => 'chomh fada le sleán',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as a wet day',
            'irish' => 'chomh fada le lá fliuch',
        ]);
        DB::table('phrases')->insert([
            'english' => 'as long as a wet Sunday',
            'irish' => 'chomh fada le Domhnach fliuch',
        ]);
    }
}
