<?php

namespace Iodev\Whois;

class Config
{
    /**
     * @return array
     */
    public static function getServersData()
    {
        return [
            [ 'zone' => '.com', 'host' => 'whois.crsnic.net' ],
            [ 'zone' => '.net', 'host' => 'whois.crsnic.net' ],
            [ 'zone' => '.ru', 'host' => 'whois.ripn.net' ],
            [ "zone" => ".ac", "host" => "whois.nic.ac" ],
            [ "zone" => ".ad", "host" => "whois.ripe.net" ],
            [ "zone" => ".ae", "host" => "whois.aeda.net.ae" ],
            [ "zone" => ".aero", "host" => "whois.aero" ],
            [ "zone" => ".af", "host" => "whois.nic.af" ],
            [ "zone" => ".ag", "host" => "whois.nic.ag" ],
            [ "zone" => ".ai", "host" => "whois.ai" ],
            [ "zone" => ".al", "host" => "whois.ripe.net" ],
            [ "zone" => ".am", "host" => "whois.amnic.net" ],
            [ "zone" => ".as", "host" => "whois.nic.as" ],
            [ "zone" => ".asia", "host" => "whois.nic.asia" ],
            [ "zone" => ".at", "host" => "whois.nic.at" ],
            [ "zone" => ".au", "host" => "whois.aunic.net" ],
            [ "zone" => ".aw", "host" => "whois.nic.aw" ],
            [ "zone" => ".ax", "host" => "whois.ax" ],
            [ "zone" => ".az", "host" => "whois.ripe.net" ],
            [ "zone" => ".ba", "host" => "whois.ripe.net" ],
            [ "zone" => ".bar", "host" => "whois.nic.bar" ],
            [ "zone" => ".be", "host" => "whois.dns.be" ],
            [ "zone" => ".berlin", "host" => "whois.nic.berlin" ],
            [ "zone" => ".best", "host" => "whois.nic.best" ],
            [ "zone" => ".bg", "host" => "whois.register.bg" ],
            [ "zone" => ".bi", "host" => "whois.nic.bi" ],
            [ "zone" => ".biz", "host" => "whois.neulevel.biz" ],
            [ "zone" => ".bj", "host" => "www.nic.bj" ],
            [ "zone" => ".bo", "host" => "whois.nic.bo" ],
            [ "zone" => ".br", "host" => "whois.nic.br" ],
            [ "zone" => ".br.com", "host" => "whois.centralnic.com" ],
            [ "zone" => ".bt", "host" => "whois.netnames.net" ],
            [ "zone" => ".bw", "host" => "whois.nic.net.bw" ],
            [ "zone" => ".by", "host" => "whois.cctld.by" ],
            [ "zone" => ".bz", "host" => "whois.belizenic.bz" ],
            [ "zone" => ".bzh", "host" => "whois-bzh.nic.fr" ],
            [ "zone" => ".ca", "host" => "whois.cira.ca" ],
            [ "zone" => ".cat", "host" => "whois.cat" ],
            [ "zone" => ".cc", "host" => "whois.nic.cc" ],
            [ "zone" => ".cd", "host" => "whois.nic.cd" ],
            [ "zone" => ".ceo", "host" => "whois.nic.ceo" ],
            [ "zone" => ".cf", "host" => "whois.dot.cf" ],
            [ "zone" => ".ch", "host" => "whois.nic.ch" ],
            [ "zone" => ".ci", "host" => "whois.nic.ci" ],
            [ "zone" => ".ck", "host" => "whois.nic.ck" ],
            [ "zone" => ".cl", "host" => "whois.nic.cl" ],
            [ "zone" => ".cloud", "host" => "whois.nic.cloud" ],
            [ "zone" => ".club", "host" => "whois.nic.club" ],
            [ "zone" => ".cn", "host" => "whois.cnnic.net.cn" ],
            [ "zone" => ".cn.com", "host" => "whois.centralnic.com" ],
            [ "zone" => ".co", "host" => "whois.nic.co" ],
            [ "zone" => ".co.nl", "host" => "whois.co.nl" ],
            [ "zone" => ".com", "host" => "whois.verisign-grs.com" ],
            [ "zone" => ".coop", "host" => "whois.nic.coop" ],
            [ "zone" => ".cx", "host" => "whois.nic.cx" ],
            [ "zone" => ".cy", "host" => "whois.ripe.net" ],
            [ "zone" => ".cz", "host" => "whois.nic.cz" ],
            [ "zone" => ".de", "host" => "whois.denic.de" ],
            [ "zone" => ".dk", "host" => "whois.dk-hostmaster.dk" ],
            [ "zone" => ".dm", "host" => "whois.nic.cx" ],
            [ "zone" => ".dz", "host" => "whois.nic.dz" ],
            [ "zone" => ".ec", "host" => "whois.nic.ec" ],
            [ "zone" => ".edu", "host" => "whois.educause.net" ],
            [ "zone" => ".ee", "host" => "whois.tld.ee" ],
            [ "zone" => ".eg", "host" => "whois.ripe.net" ],
            [ "zone" => ".es", "host" => "whois.nic.es" ],
            [ "zone" => ".eu", "host" => "whois.eu" ],
            [ "zone" => ".eu.com", "host" => "whois.centralnic.com" ],
            [ "zone" => ".eus", "host" => "whois.nic.eus" ],
            [ "zone" => ".fi", "host" => "whois.fi" ],
            [ "zone" => ".fo", "host" => "whois.nic.fo" ],
            [ "zone" => ".fr", "host" => "whois.nic.fr" ],
            [ "zone" => ".gb", "host" => "whois.ripe.net" ],
            [ "zone" => ".gb.com", "host" => "whois.centralnic.com" ],
            [ "zone" => ".gb.net", "host" => "whois.centralnic.com" ],
            [ "zone" => ".qc.com", "host" => "whois.centralnic.com" ],
            [ "zone" => ".ge", "host" => "whois.ripe.net" ],
            [ "zone" => ".gg", "host" => "whois.gg" ],
            [ "zone" => ".gi", "host" => "whois2.afilias-grs.net" ],
            [ "zone" => ".gl", "host" => "whois.nic.gl" ],
            [ "zone" => ".gm", "host" => "whois.ripe.net" ],
            [ "zone" => ".gov", "host" => "whois.nic.gov" ],
            [ "zone" => ".gr", "host" => "whois.ripe.net" ],
            [ "zone" => ".gs", "host" => "whois.nic.gs" ],
            [ "zone" => ".gy", "host" => "whois.registry.gy" ],
            [ "zone" => ".hamburg", "host" => "whois.nic.hamburg" ],
            [ "zone" => ".hiphop", "host" => "whois.uniregistry.net" ],
            [ "zone" => ".hk", "host" => "whois.hknic.net.hk" ],
            [ "zone" => ".hm", "host" => "whois.registry.hm" ],
            [ "zone" => ".hn", "host" => "whois2.afilias-grs.net" ],
            [ "zone" => ".host", "host" => "whois.nic.host" ],
            [ "zone" => ".hr", "host" => "whois.dns.hr" ],
            [ "zone" => ".ht", "host" => "whois.nic.ht" ],
            [ "zone" => ".hu", "host" => "whois.nic.hu" ],
            [ "zone" => ".hu.com", "host" => "whois.centralnic.com" ],
            [ "zone" => ".id", "host" => "whois.pandi.or.id" ],
            [ "zone" => ".ie", "host" => "whois.domainregistry.ie" ],
            [ "zone" => ".il", "host" => "whois.isoc.org.il" ],
            [ "zone" => ".im", "host" => "whois.nic.im" ],
            [ "zone" => ".in", "host" => "whois.inregistry.net" ],
            [ "zone" => ".info", "host" => "whois.afilias.info" ],
            [ "zone" => ".ing", "host" => "domain-registry-whois.l.google.com" ],
            [ "zone" => ".ink", "host" => "whois.centralnic.com" ],
            [ "zone" => ".int", "host" => "whois.isi.edu" ],
            [ "zone" => ".io", "host" => "whois.nic.io" ],
            [ "zone" => ".iq", "host" => "whois.cmc.iq" ],
            [ "zone" => ".ir", "host" => "whois.nic.ir" ],
            [ "zone" => ".is", "host" => "whois.isnic.is" ],
            [ "zone" => ".it", "host" => "whois.nic.it" ],
            [ "zone" => ".je", "host" => "whois.je" ],
            [ "zone" => ".jobs", "host" => "jobswhois.verisign-grs.com" ],
            [ "zone" => ".jp", "host" => "whois.jprs.jp" ],
            [ "zone" => ".ke", "host" => "whois.kenic.or.ke" ],
            [ "zone" => ".kg", "host" => "whois.domain.kg" ],
            [ "zone" => ".ki", "host" => "whois.nic.ki" ],
            [ "zone" => ".kr", "host" => "whois.kr" ],
            [ "zone" => ".kz", "host" => "whois.nic.kz" ],
            [ "zone" => ".la", "host" => "whois2.afilias-grs.net" ],
            [ "zone" => ".li", "host" => "whois.nic.li" ],
            [ "zone" => ".london", "host" => "whois.nic.london" ],
            [ "zone" => ".lt", "host" => "whois.domreg.lt" ],
            [ "zone" => ".lu", "host" => "whois.restena.lu" ],
            [ "zone" => ".lv", "host" => "whois.nic.lv" ],
            [ "zone" => ".ly", "host" => "whois.lydomains.com" ],
            [ "zone" => ".ma", "host" => "whois.iam.net.ma" ],
            [ "zone" => ".mc", "host" => "whois.ripe.net" ],
            [ "zone" => ".md", "host" => "whois.nic.md" ],
            [ "zone" => ".me", "host" => "whois.nic.me" ],
            [ "zone" => ".mg", "host" => "whois.nic.mg" ],
            [ "zone" => ".mil", "host" => "whois.nic.mil" ],
            [ "zone" => ".mk", "host" => "whois.ripe.net" ],
            [ "zone" => ".ml", "host" => "whois.dot.ml" ],
            [ "zone" => ".mo", "host" => "whois.monic.mo" ],
            [ "zone" => ".mobi", "host" => "whois.dotmobiregistry.net" ],
            [ "zone" => ".ms", "host" => "whois.nic.ms" ],
            [ "zone" => ".mt", "host" => "whois.ripe.net" ],
            [ "zone" => ".mu", "host" => "whois.nic.mu" ],
            [ "zone" => ".museum", "host" => "whois.museum" ],
            [ "zone" => ".mx", "host" => "whois.nic.mx" ],
            [ "zone" => ".my", "host" => "whois.mynic.net.my" ],
            [ "zone" => ".mz", "host" => "whois.nic.mz" ],
            [ "zone" => ".na", "host" => "whois.na-nic.com.na" ],
            [ "zone" => ".name", "host" => "whois.nic.name" ],
            [ "zone" => ".nc", "host" => "whois.nc" ],
            [ "zone" => ".net", "host" => "whois.verisign-grs.com" ],
            [ "zone" => ".nf", "host" => "whois.nic.cx" ],
            [ "zone" => ".ng", "host" => "whois.nic.net.ng" ],
            [ "zone" => ".nl", "host" => "whois.domain-registry.nl" ],
            [ "zone" => ".no", "host" => "whois.norid.no" ],
            [ "zone" => ".no.com", "host" => "whois.centralnic.com" ],
            [ "zone" => ".nu", "host" => "whois.nic.nu" ],
            [ "zone" => ".nz", "host" => "whois.srs.net.nz" ],
            [ "zone" => ".om", "host" => "whois.registry.om" ],
            [ "zone" => ".ong", "host" => "whois.publicinterestregistry.net" ],
            [ "zone" => ".ooo", "host" => "whois.nic.ooo" ],
            [ "zone" => ".org", "host" => "whois.pir.org" ],
            [ "zone" => ".paris", "host" => "whois-paris.nic.fr" ],
            [ "zone" => ".pe", "host" => "kero.yachay.pe" ],
            [ "zone" => ".pf", "host" => "whois.registry.pf" ],
            [ "zone" => ".pics", "host" => "whois.uniregistry.net" ],
            [ "zone" => ".pl", "host" => "whois.dns.pl" ],
            [ "zone" => ".pm", "host" => "whois.nic.pm" ],
            [ "zone" => ".pr", "host" => "whois.nic.pr" ],
            [ "zone" => ".press", "host" => "whois.nic.press" ],
            [ "zone" => ".pro", "host" => "whois.registrypro.pro" ],
            [ "zone" => ".pt", "host" => "whois.dns.pt" ],
            [ "zone" => ".pub", "host" => "whois.unitedtld.com" ],
            [ "zone" => ".pw", "host" => "whois.nic.pw" ],
            [ "zone" => ".qa", "host" => "whois.registry.qa" ],
            [ "zone" => ".re", "host" => "whois.nic.re" ],
            [ "zone" => ".ro", "host" => "whois.rotld.ro" ],
            [ "zone" => ".rs", "host" => "whois.rnids.rs" ],
            [ "zone" => ".ru", "host" => "whois.tcinet.ru" ],
            [ "zone" => ".sa", "host" => "saudinic.net.sa" ],
            [ "zone" => ".sa.com", "host" => "whois.centralnic.com" ],
            [ "zone" => ".sb", "host" => "whois.nic.net.sb" ],
            [ "zone" => ".sc", "host" => "whois2.afilias-grs.net" ],
            [ "zone" => ".se", "host" => "whois.nic-se.se" ],
            [ "zone" => ".se.com", "host" => "whois.centralnic.com" ],
            [ "zone" => ".se.net", "host" => "whois.centralnic.com" ],
            [ "zone" => ".sg", "host" => "whois.nic.net.sg" ],
            [ "zone" => ".sh", "host" => "whois.nic.sh" ],
            [ "zone" => ".si", "host" => "whois.arnes.si" ],
            [ "zone" => ".sk", "host" => "whois.sk-nic.sk" ],
            [ "zone" => ".sm", "host" => "whois.nic.sm" ],
            [ "zone" => ".st", "host" => "whois.nic.st" ],
            [ "zone" => ".so", "host" => "whois.nic.so" ],
            [ "zone" => ".su", "host" => "whois.tcinet.ru" ],
            [ "zone" => ".sx", "host" => "whois.sx" ],
            [ "zone" => ".sy", "host" => "whois.tld.sy" ],
            [ "zone" => ".tc", "host" => "whois.adamsnames.tc" ],
            [ "zone" => ".tel", "host" => "whois.nic.tel" ],
            [ "zone" => ".tf", "host" => "whois.nic.tf" ],
            [ "zone" => ".th", "host" => "whois.thnic.net" ],
            [ "zone" => ".tj", "host" => "whois.nic.tj" ],
            [ "zone" => ".tk", "host" => "whois.nic.tk" ],
            [ "zone" => ".tl", "host" => "whois.domains.tl" ],
            [ "zone" => ".tm", "host" => "whois.nic.tm" ],
            [ "zone" => ".tn", "host" => "whois.ati.tn" ],
            [ "zone" => ".to", "host" => "whois.tonic.to" ],
            [ "zone" => ".top", "host" => "whois.nic.top" ],
            [ "zone" => ".tp", "host" => "whois.domains.tl" ],
            [ "zone" => ".tr", "host" => "whois.nic.tr" ],
            [ "zone" => ".travel", "host" => "whois.nic.travel" ],
            [ "zone" => ".tw", "host" => "whois.twnic.net.tw" ],
            [ "zone" => ".tv", "host" => "whois.nic.tv" ],
            [ "zone" => ".tz", "host" => "whois.tznic.or.tz" ],
            [ "zone" => ".ua", "host" => "whois.ua" ],
            [ "zone" => ".ug", "host" => "whois.co.ug" ],
            [ "zone" => ".uk", "host" => "whois.nic.uk" ],
            [ "zone" => ".uk.com", "host" => "whois.centralnic.com" ],
            [ "zone" => ".uk.net", "host" => "whois.centralnic.com" ],
            [ "zone" => ".ac.uk", "host" => "whois.ja.net" ],
            [ "zone" => ".gov.uk", "host" => "whois.ja.net" ],
            [ "zone" => ".us", "host" => "whois.nic.us" ],
            [ "zone" => ".us.com", "host" => "whois.centralnic.com" ],
            [ "zone" => ".uy", "host" => "nic.uy" ],
            [ "zone" => ".uy.com", "host" => "whois.centralnic.com" ],
            [ "zone" => ".uz", "host" => "whois.cctld.uz" ],
            [ "zone" => ".va", "host" => "whois.ripe.net" ],
            [ "zone" => ".vc", "host" => "whois2.afilias-grs.net" ],
            [ "zone" => ".ve", "host" => "whois.nic.ve" ],
            [ "zone" => ".vg", "host" => "ccwhois.ksregistry.net" ],
            [ "zone" => ".vu", "host" => "vunic.vu" ],
            [ "zone" => ".wang", "host" => "whois.nic.wang" ],
            [ "zone" => ".wf", "host" => "whois.nic.wf" ],
            [ "zone" => ".wiki", "host" => "whois.nic.wiki" ],
            [ "zone" => ".ws", "host" => "whois.website.ws" ],
            [ "zone" => ".xxx", "host" => "whois.nic.xxx" ],
            [ "zone" => ".xyz", "host" => "whois.nic.xyz" ],
            [ "zone" => ".yu", "host" => "whois.ripe.net" ],
            [ "zone" => ".za.com", "host" => "whois.centralnic.com" ],

            // .рф
            [ 'zone' => '.xn--p1ai', 'host' => 'whois.ripn.net' ],
        ];
    }
}