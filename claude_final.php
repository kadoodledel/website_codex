<?php
/**
 * Template Name: Green Leaf Startseite
 */
?><!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Green Leaf Münster e.V. – Cannabis Social Club Münster. Lizensiert, sicher, mitgliederorientiert. Jetzt Mitglied werden.">
<title>Green Leaf Münster e.V. – Social Club Münster</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>

<!--
=================================================================
  FOTO-PLATZHALTER – tausche die URL-Kommentare gegen echte
  WordPress Media Library URLs aus:

  [FOTO_PFLANZE]   → Nahaufnahme Cannabispflanze (Qualitäts-Sektion)
  [FOTO_ANBAU]     → Anbauanlage / Gewächshaus (optional zweites Bild)
  [FOTO_FRANCO]    → Portraitfoto Franco Attardo
  [FOTO_FLORIAN]   → Portraitfoto Florian Susen
  [FOTO_LOGAN]     → Portraitfoto Anatol-Logan Leitenberger

  Suche im Code nach diesen Begriffen in Kommentaren.
  Ersetze den src-Wert mit der URL aus der Media Library.
=================================================================
-->

<style>
/* ── WPFORMS: Radio-Feld durch Kacheln ersetzen ── */
.wpforms-field-radio { display: none !important; }

/* ── WPFORMS: Alle Felder im Green Leaf Design ── */
.wpforms-container,
.wpforms-container * { color: rgba(255,255,255,.85) !important; }

.wpforms-container .wpforms-form input[type="text"],
.wpforms-container .wpforms-form input[type="email"],
.wpforms-container .wpforms-form input[type="tel"],
.wpforms-container .wpforms-form input[type="url"],
.wpforms-container .wpforms-form select,
.wpforms-container .wpforms-form textarea {
  background: rgba(255,255,255,.06) !important;
  border: 1px solid rgba(255,255,255,.1) !important;
  color: #fff !important;
  padding: 11px 14px !important;
  border-radius: 6px !important;
  font-family: 'Inter', sans-serif !important;
  font-size: 16px !important;
  width: 100% !important;
}
.wpforms-container .wpforms-form input::placeholder,
.wpforms-container .wpforms-form textarea::placeholder {
  color: rgba(255,255,255,.22) !important;
}
.wpforms-container .wpforms-form input:focus,
.wpforms-container .wpforms-form select:focus,
.wpforms-container .wpforms-form textarea:focus {
  border-color: #7ecb20 !important;
  background: rgba(126,203,32,.06) !important;
  outline: none !important;
}
/* Alle input-Typen abdecken inkl. type="text" von WPForms */
.wpforms-container .wpforms-form input,
.wpforms-container .wpforms-form input[type="text"],
.wpforms-container .wpforms-form input[type="number"] {
  background: rgba(255,255,255,.06) !important;
  color: #fff !important;
  border: 1px solid rgba(255,255,255,.1) !important;
}

/* Labels */
.wpforms-container .wpforms-field-label {
  color: rgba(255,255,255,.55) !important;
  font-size: 13px !important;
  font-weight: 700 !important;
  letter-spacing: .06em !important;
  text-transform: uppercase !important;
  font-family: 'Inter', sans-serif !important;
  margin-bottom: 6px !important;
}
.wpforms-container .wpforms-field-label-inline {
  color: rgba(255,255,255,.75) !important;
  font-size: 16px !important;
  font-weight: 400 !important;
  text-transform: none !important;
  letter-spacing: 0 !important;
}

/* Subfelder (Vor-/Nachname) — nur für Name-Feld scopen */
.wpforms-container .wpforms-field-name .wpforms-field-row {
  display: grid !important;
  grid-template-columns: 1fr 1fr !important;
  gap: 12px !important;
  float: none !important;
  width: 100% !important;
}
.wpforms-container .wpforms-field-name .wpforms-field-row .wpforms-field-row-block {
  width: 100% !important;
  float: none !important;
  padding: 0 !important;
  margin: 0 !important;
}
.wpforms-container .wpforms-field-name .wpforms-field-row::after {
  display: none !important;
}
.wpforms-container .wpforms-field-name .wpforms-field-row {
  grid-template-columns: 1fr 1fr !important;
  gap: 12px !important;
}
.wpforms-container .wpforms-field-name .wpforms-field-row .wpforms-field-row-block {
  min-width: 0 !important;
}
@media(max-width:560px){
  .wpforms-container .wpforms-field-name .wpforms-field-row {
    grid-template-columns: 1fr !important;
  }
}

/* Submit-Button */
.wpforms-container .wpforms-submit-container { margin-top: 8px !important; }
.wpforms-container .wpforms-submit {
  background: #7ecb20 !important;
  color: #1c2b1e !important;
  font-family: 'Oswald', sans-serif !important;
  font-size: 17px !important;
  letter-spacing: .08em !important;
  text-transform: uppercase !important;
  border: none !important;
  border-radius: 6px !important;
  padding: 13px 28px !important;
  width: 100% !important;
  cursor: pointer !important;
  transition: background .2s !important;
}
.wpforms-container .wpforms-submit:hover { background: #9be82a !important; }

/* Checkbox (Einverständniserklärung) */
.wpforms-container .wpforms-field-checkbox input[type="checkbox"] {
  accent-color: #7ecb20 !important;
  width: 16px !important;
  height: 16px !important;
}
.wpforms-container .wpforms-field-checkbox .wpforms-field-label-inline {
  font-size: 13px !important;
  color: rgba(255,255,255,.5) !important;
  line-height: 1.6 !important;
}

/* Fehlermeldungen */
.wpforms-container .wpforms-error {
  color: #e24b4a !important;
  font-size: 12px !important;
}
.wpforms-container .wpforms-field-error input,
.wpforms-container .wpforms-field-error select,
.wpforms-container .wpforms-field-error textarea {
  border-color: #e24b4a !important;
}

/* Erfolgsmeldung */
.wpforms-confirmation-container-full {
  background: rgba(126,203,32,.08) !important;
  border: 1px solid rgba(126,203,32,.3) !important;
  border-radius: 10px !important;
  padding: 24px !important;
  color: #fff !important;
  text-align: center !important;
}

/* Abstände zwischen Feldern */
.wpforms-container .wpforms-field { margin-bottom: 14px !important; padding: 0 !important; }

/* WPForms-Spaltenklassen neutralisieren (verhindert versetztes erstes Feld) */
.wpforms-container .wpforms-form .wpforms-field.wpforms-one-half,
.wpforms-container .wpforms-form .wpforms-field.wpforms-two-fourths,
.wpforms-container .wpforms-form .wpforms-field.wpforms-three-sixths,
.wpforms-container .wpforms-form .wpforms-field.wpforms-first,
.wpforms-container .wpforms-form .wpforms-field.wpforms-one-third,
.wpforms-container .wpforms-form .wpforms-field.wpforms-two-sixths,
.wpforms-container .wpforms-form .wpforms-field.wpforms-two-thirds,
.wpforms-container .wpforms-form .wpforms-field.wpforms-four-sixths {
  width: 100% !important;
  margin-left: 0 !important;
  float: none !important;
  clear: both !important;
}

/* Erwingt volle Breite und entfernt Ränder von WordPress-Standard-Containern */
html, body {
    margin: 0 !important;
    padding: 0 !important;
    width: 100% !important;
    max-width: 100% !important;
    overflow-x: hidden;
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --dark:#1c2b1e;
  --dark2:#243027;
  --lime:#7ecb20;
  --lime2:#9be82a;
  --gold:#c8a84b;
  --white:#fff;
  --tl:rgba(255,255,255,.85);
  --tm:rgba(255,255,255,.55);
  --td:rgba(255,255,255,.28);
  --border:rgba(126,203,32,.15);
  --r:10px;
  --rs:6px;
  --fd:'Oswald',sans-serif;
  --fb:'Inter',sans-serif;
}
html{scroll-behavior:smooth}
body{font-family:var(--fb);background:var(--dark);color:var(--white);line-height:1.72;font-size:18px;-webkit-font-smoothing:antialiased;overflow-x:hidden}

/* ── UTILS ── */
.wrap{max-width:960px;margin:0 auto;padding:0 20px}
.eyebrow{font-family:var(--fb);font-size:13px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--lime);margin-bottom:12px}
.h2{font-family:var(--fd);font-size:clamp(28px,5vw,46px);letter-spacing:.05em;text-transform:uppercase;color:var(--white);line-height:1.0;margin-bottom:16px}
.lead{font-size:17px;font-weight:400;color:var(--tl);line-height:1.78;max-width:620px}
.btn{display:inline-block;font-family:var(--fd);font-size:17px;letter-spacing:.08em;text-transform:uppercase;text-decoration:none;padding:12px 30px;border-radius:var(--rs);border:none;cursor:pointer;transition:background .2s,transform .15s}
.btn-lime{background:var(--lime);color:var(--dark)}
.btn-lime:hover{background:var(--lime2);transform:translateY(-2px)}
.btn-outline{background:transparent;color:var(--lime);border:1.5px solid var(--lime)}
.btn-outline:hover{background:rgba(126,203,32,.1)}
section{padding:72px 0}

/* ── AGE GATE ── */
.ag{position:fixed;inset:0;z-index:999;background:var(--dark);display:flex;align-items:center;justify-content:center;padding:20px}
.ag-box{background:rgba(255,255,255,.04);border:1px solid var(--border);border-radius:16px;padding:44px 32px;text-align:center;max-width:340px;width:100%}
.ag-logo{width:64px;height:64px;border-radius:50%;background:rgba(126,203,32,.12);border:2px solid rgba(126,203,32,.3);margin:0 auto 20px;display:flex;align-items:center;justify-content:center}
.ag-logo img{width:40px;height:40px;object-fit:contain}
.ag h2{font-family:var(--fd);font-size:24px;letter-spacing:.06em;text-transform:uppercase;color:var(--white);margin-bottom:8px}
.ag p{font-size:14px;font-weight:300;color:var(--tm);margin-bottom:28px;line-height:1.7}
.ag-btns{display:flex;gap:10px;justify-content:center}
.ag-no{font-family:var(--fd);font-size:14px;letter-spacing:.08em;text-transform:uppercase;padding:12px 24px;border-radius:var(--rs);background:rgba(255,255,255,.06);color:var(--tm);border:1px solid rgba(255,255,255,.1);cursor:pointer;transition:background .2s}
.ag-no:hover{background:rgba(255,255,255,.12)}

/* ── NAV ── */
nav{position:fixed;top:0;left:0;right:0;z-index:200;background:rgba(24,36,26,.97);backdrop-filter:blur(10px);border-bottom:1px solid rgba(126,203,32,.1);height:64px;display:flex;align-items:center;justify-content:space-between;padding:0 24px}
.nl{display:flex;align-items:center;gap:11px;text-decoration:none}
.nl img{height:38px;width:38px;object-fit:contain}
.nb{display:flex;flex-direction:column;line-height:1.15}
.nb-main{font-family:var(--fd);font-size:18px;color:var(--white);letter-spacing:.1em;text-transform:uppercase;line-height:1}
.nb-sub{font-family:var(--fb);font-size:11px;color:var(--lime);letter-spacing:.12em;text-transform:uppercase;margin-top:2px}
.nav-links{display:flex;align-items:center;gap:2px;list-style:none}
.nav-links a{font-family:var(--fb);font-size:14px;color:var(--tl);text-decoration:none;padding:7px 12px;border-radius:var(--rs);transition:color .2s,background .2s;white-space:nowrap}
.nav-links a:hover{color:var(--lime);background:rgba(126,203,32,.08)}
.ncta{background:var(--lime)!important;color:var(--dark)!important;font-family:var(--fd)!important;font-size:15px!important;letter-spacing:.08em!important;text-transform:uppercase!important}
.ncta:hover{background:var(--lime2)!important}
.burger{display:none;flex-direction:column;gap:5px;cursor:pointer;padding:8px;border:none;background:none}
.burger span{display:block;width:22px;height:2px;background:var(--white);border-radius:2px;transition:all .3s}
.mob-nav{display:none;position:fixed;top:64px;left:0;right:0;background:rgba(24,36,26,.98);backdrop-filter:blur(10px);border-bottom:1px solid var(--border);padding:16px 20px;flex-direction:column;gap:4px;z-index:199}
.mob-nav.open{display:flex}
.mob-nav a{font-family:var(--fb);font-size:16px;color:var(--tl);text-decoration:none;padding:12px 12px;border-radius:var(--rs);border-bottom:1px solid rgba(255,255,255,.05)}
.mob-nav a.mob-cta{border-bottom:none;background:var(--lime);color:var(--dark);font-family:var(--fd);font-size:16px;letter-spacing:.1em;text-transform:uppercase;text-align:center;margin-top:8px}
@media(max-width:780px){.nav-links{display:none}.burger{display:flex}}

/* ── HERO ── */
.hero{min-height:100svh;display:flex;align-items:center;justify-content:center;text-align:center;position:relative;overflow:hidden;padding:64px 20px 80px}
.hero-bg{position:absolute;inset:0;background:linear-gradient(160deg,#1a3520 0%,#253f20 45%,#1c3a18 100%);z-index:0}
.hero-bg::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 70% 60% at 30% 65%,rgba(58,125,46,.2) 0,transparent 70%),radial-gradient(ellipse 45% 45% at 75% 30%,rgba(126,203,32,.12) 0,transparent 60%)}
.hero-bg::after{content:'';position:absolute;inset:0;background-image:linear-gradient(rgba(126,203,32,.03) 1px,transparent 1px),linear-gradient(90deg,rgba(126,203,32,.03) 1px,transparent 1px);background-size:56px 56px}
.hero-content{position:relative;z-index:2;max-width:720px;animation:fadeUp .9s ease both}
@keyframes fadeUp{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:translateY(0)}}
.hero .eyebrow{animation:fadeUp .9s .1s ease both}
.hero h1{font-family:var(--fd);font-size:clamp(54px,13vw,100px);letter-spacing:.06em;text-transform:uppercase;line-height:1.0;margin-bottom:28px;animation:fadeUp .9s .15s ease both;color:var(--white)}
.hero h1 span{color:var(--lime)}
.hero-info{margin-bottom:8px;animation:fadeUp .9s .2s ease both}
.hero-info p{font-size:17px;color:var(--tl);font-weight:400}
.hero-info p strong{font-weight:700;color:var(--white)}
.hero-or{font-size:14px;color:var(--tm);margin:20px 0 12px;animation:fadeUp .9s .25s ease both}
.hero-btns{display:flex;gap:10px;justify-content:center;flex-wrap:wrap;animation:fadeUp .9s .3s ease both}
.hero-social{display:flex;gap:18px;justify-content:center;margin-top:26px;animation:fadeUp .9s .35s ease both}
.hero-social a{display:flex;align-items:center;gap:6px;font-size:13px;color:var(--tm);text-decoration:none;transition:color .2s}
.hero-social a:hover{color:var(--lime)}
.hero-scroll{position:absolute;bottom:28px;left:50%;transform:translateX(-50%);z-index:2;display:flex;flex-direction:column;align-items:center;gap:6px;color:var(--td);font-size:10px;letter-spacing:.12em;text-transform:uppercase;animation:bob 2.2s ease-in-out infinite}
@keyframes bob{0%,100%{transform:translateX(-50%) translateY(0)}50%{transform:translateX(-50%) translateY(7px)}}

/* ── TRUST ── */
.trust{background:var(--dark2)}
.trust-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:14px;margin-top:40px}
.trust-card{background:rgba(255,255,255,.03);border:1px solid var(--border);border-radius:var(--r);padding:26px;transition:border-color .2s,background .2s}
.trust-card:hover{border-color:rgba(126,203,32,.3);background:rgba(255,255,255,.05)}
.trust-num{font-family:var(--fd);font-size:30px;color:var(--lime);margin-bottom:8px}
.trust-card h3{font-family:var(--fd);font-size:17px;letter-spacing:.04em;text-transform:uppercase;color:var(--white);margin-bottom:8px}
.trust-card p{font-size:14px;font-weight:300;color:var(--tl);line-height:1.75}

/* ── ÜBER UNS ── */
.ueber{background:var(--dark)}
.ueber-inner{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:start;margin-top:36px}
.ueber-body{font-size:15px;font-weight:300;color:var(--tl);line-height:1.85}
.team-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-top:16px}
.team-card{background:rgba(255,255,255,.03);border:1px solid var(--border);border-radius:var(--r);overflow:hidden;text-align:center;transition:border-color .2s}
.team-card:hover{border-color:rgba(126,203,32,.3)}
.team-photo{width:100%;aspect-ratio:1;object-fit:cover;display:block;background:rgba(126,203,32,.08)}
.team-initials{width:100%;aspect-ratio:1;background:rgba(126,203,32,.08);display:flex;align-items:center;justify-content:center;font-family:var(--fd);font-size:32px;color:var(--lime);letter-spacing:.05em}
.team-info{padding:12px 14px}
.team-name{font-family:var(--fd);font-size:16px;letter-spacing:.04em;text-transform:uppercase;color:var(--white);margin-bottom:2px}
.team-role{font-size:12px;font-weight:300;color:var(--tm)}

/* ── MITGLIEDSCHAFT ── */
.mitglied{background:var(--dark2)}
.facts-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:14px;margin-top:36px}
.fact-card{background:rgba(255,255,255,.03);border:1px solid var(--border);border-radius:var(--r);padding:24px}
.fact-val{font-family:var(--fd);font-size:28px;color:var(--lime);margin-bottom:6px;letter-spacing:.04em}
.fact-card h3{font-family:var(--fd);font-size:15px;letter-spacing:.04em;text-transform:uppercase;color:var(--white);margin-bottom:8px}
.fact-card p{font-size:13px;font-weight:300;color:var(--tm);line-height:1.75}
.fact-card p strong{color:var(--white);font-weight:700}
.fact-wide{grid-column:span 2}
.mitglied-cta{text-align:center;margin-top:36px}

/* ── QUALITÄT ── */
.qualitaet{background:var(--dark)}
.qual-inner{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center;margin-top:36px}
.qual-img{border-radius:var(--r);overflow:hidden;border:1px solid var(--border);aspect-ratio:1;background:rgba(126,203,32,.06);display:flex;align-items:center;justify-content:center}
.qual-img img{width:100%;height:100%;object-fit:cover;display:block}
.qual-placeholder{font-family:var(--fd);font-size:13px;letter-spacing:.08em;color:var(--td);text-transform:uppercase;padding:20px;text-align:center}
.qual-points{display:flex;flex-direction:column;gap:13px;margin-top:22px}
.qual-point{display:flex;gap:12px;align-items:flex-start}
.qual-dot{width:7px;height:7px;min-width:7px;background:var(--lime);border-radius:50%;margin-top:7px}
.qual-point p{font-size:14px;font-weight:300;color:var(--tl);line-height:1.7}
.strains-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:10px;margin-top:24px}
.strain-card{background:rgba(255,255,255,.04);border:1px solid var(--border);border-radius:var(--rs);padding:14px 16px;transition:border-color .2s,background .2s}
.strain-card:hover{border-color:rgba(126,203,32,.35);background:rgba(126,203,32,.06)}
.strain-card--product{border-color:rgba(200,168,75,.22);background:rgba(200,168,75,.04)}
.strain-card--product:hover{border-color:rgba(200,168,75,.4)}
.strain-tag{font-size:9px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--lime);margin-bottom:5px}
.strain-tag--product{color:var(--gold)}
.strain-name{font-family:var(--fd);font-size:15px;color:var(--white);letter-spacing:.03em}

/* ── STANDORT ── */
.standort{background:var(--dark2)}
.standort-inner{display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:start;margin-top:36px}
.sfacts{display:flex;flex-direction:column;gap:18px}
.sfact{display:flex;gap:14px;align-items:flex-start}
.sfact-icon{width:40px;height:40px;min-width:40px;background:rgba(126,203,32,.1);border:1px solid rgba(126,203,32,.2);border-radius:var(--rs);display:flex;align-items:center;justify-content:center;font-size:16px}
.sfact-label{font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--lime);margin-bottom:3px}
.sfact-val{font-size:14px;font-weight:300;color:var(--tl);line-height:1.6}
.map-link{border-radius:var(--r);overflow:hidden;border:1px solid var(--border);aspect-ratio:4/3;display:block;transition:border-color .2s}
.map-link:hover{border-color:rgba(126,203,32,.35)}
.map-link img{width:100%;height:100%;object-fit:cover;display:block}

/* ── FAQ ── */
.faq{background:var(--dark)}
.faq-list{margin-top:36px;display:flex;flex-direction:column;gap:8px}
.faq-item{background:rgba(255,255,255,.03);border:1px solid var(--border);border-radius:var(--r);overflow:hidden}
.faq-q{width:100%;display:flex;justify-content:space-between;align-items:center;gap:12px;padding:17px 22px;background:none;border:none;cursor:pointer;text-align:left;color:var(--white);font-family:var(--fb);font-size:15px;line-height:1.4;transition:background .2s}
.faq-q:hover{background:rgba(126,203,32,.05)}
.faq-icon{width:22px;height:22px;min-width:22px;border-radius:50%;background:rgba(126,203,32,.12);border:1px solid rgba(126,203,32,.28);display:flex;align-items:center;justify-content:center;font-size:15px;color:var(--lime);transition:transform .25s,background .2s;line-height:1}
.faq-item.open .faq-icon{transform:rotate(45deg);background:var(--lime);color:var(--dark)}
.faq-a{max-height:0;overflow:hidden;transition:max-height .35s ease,padding .25s}
.faq-item.open .faq-a{max-height:400px;padding-bottom:18px}
.faq-a p{padding:0 22px;font-size:14px;font-weight:300;color:var(--tl);line-height:1.85}
.faq-more{text-align:center;margin-top:30px}

/* ── PRESSE ── */
.presse{background:var(--dark2)}
.presse-card{background:rgba(255,255,255,.03);border:1px solid var(--border);border-radius:var(--r);padding:26px 28px;margin-top:28px;display:flex;gap:20px;align-items:flex-start}
.presse-badge{flex-shrink:0;background:rgba(126,203,32,.1);border:1px solid rgba(126,203,32,.22);border-radius:var(--rs);padding:8px 14px;font-family:var(--fd);font-size:13px;letter-spacing:.1em;text-transform:uppercase;color:var(--lime);white-space:nowrap}
.presse-body p{font-size:14px;font-weight:300;color:var(--tl);line-height:1.8;margin-bottom:12px}
.presse-link{font-size:13px;font-weight:700;color:var(--lime);text-decoration:none}
.presse-link:hover{text-decoration:underline}

/* ── PARTNER ── */
.partner{background:var(--dark)}
.partner-grid{display:flex;gap:12px;flex-wrap:wrap;margin-top:24px}
.partner-item{background:rgba(255,255,255,.04);border:1px solid var(--border);border-radius:var(--rs);padding:12px 20px;font-size:13px;color:var(--tm);text-decoration:none;transition:border-color .2s,color .2s}
.partner-item:hover{border-color:rgba(126,203,32,.35);color:var(--lime)}

/* ── FORMULAR ── */
.formular{background:var(--dark2)}
.tab-nav{display:flex;gap:4px;background:rgba(0,0,0,.25);border:1px solid rgba(126,203,32,.12);border-radius:var(--r);padding:4px;margin-bottom:24px;max-width:500px}
.tab-btn{flex:1;font-family:var(--fd);font-size:15px;color:var(--tm);background:none;border:none;border-radius:7px;padding:10px 14px;cursor:pointer;transition:color .2s,background .2s;letter-spacing:.06em;text-transform:uppercase}
.tab-btn:hover{color:var(--tl)}
.tab-btn.active{background:var(--lime);color:var(--dark)}
.form-panel{display:none}
.form-panel.active{display:block}
.form-card{background:rgba(255,255,255,.03);border:1px solid rgba(126,203,32,.15);border-radius:var(--r);overflow:hidden}
.form-header{background:rgba(0,0,0,.2);border-bottom:1px solid rgba(126,203,32,.1);padding:22px 28px;display:flex;align-items:flex-start;gap:14px}
.f-badge{flex-shrink:0;font-family:var(--fd);font-size:11px;letter-spacing:.1em;text-transform:uppercase;background:var(--lime);color:var(--dark);padding:5px 11px;border-radius:100px;margin-top:3px;white-space:nowrap}
.f-badge.outline{background:transparent;color:var(--lime);border:1px solid var(--lime)}
.form-header h2{font-family:var(--fd);font-size:20px;letter-spacing:.05em;text-transform:uppercase;color:var(--white);margin-bottom:4px}
.form-header p{font-size:13px;font-weight:300;color:var(--tm)}
.form-body{padding:28px}
.fsec{margin-bottom:26px}
.fsec-title{font-size:10px;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:var(--lime);margin-bottom:12px;padding-bottom:8px;border-bottom:1px solid rgba(126,203,32,.12)}
.frow{display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:12px}
.frow.s1{grid-template-columns:1fr}
.frow.s3{grid-template-columns:1fr 1fr 1fr}
.ffield{display:flex;flex-direction:column;gap:5px}
.ffield label{font-family:var(--fb);font-size:12px;font-weight:700;color:rgba(255,255,255,.62);letter-spacing:.05em;text-transform:uppercase}
.ffield label .req{color:var(--lime);margin-left:2px}
.ffield input,.ffield select,.ffield textarea{font-family:var(--fb);font-size:15px;font-weight:400;color:var(--white);background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:var(--rs);padding:11px 14px;outline:none;transition:border-color .2s,background .2s;width:100%;appearance:none;-webkit-appearance:none;color-scheme:dark}
.ffield input::placeholder,.ffield textarea::placeholder{color:rgba(255,255,255,.22)}
.ffield input:focus,.ffield select:focus,.ffield textarea:focus{border-color:var(--lime);background:rgba(126,203,32,.06)}
.ffield textarea{resize:vertical;min-height:84px;line-height:1.6}
.ffield select{background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%237ecb20' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 12px center;background-color:rgba(255,255,255,.06);padding-right:36px}
.ffield select option{background:#1c2b1e;color:#fff}
.ffield .hint{font-size:11px;color:rgba(255,255,255,.32);margin-top:3px;line-height:1.5}
.cc-grid{display:grid;grid-template-columns:1fr 1fr;gap:10px}
.cc{position:relative;cursor:pointer}
.cc input[type=radio]{position:absolute;opacity:0;width:0}
.cc-inner{border:1.5px solid rgba(255,255,255,.08);border-radius:var(--rs);padding:13px 14px;transition:border-color .15s,background .15s;background:rgba(255,255,255,.04)}
.cc input[type=radio]:checked+.cc-inner{border-color:var(--lime);background:rgba(126,203,32,.08)}
.cc-icon{font-size:17px;margin-bottom:5px;display:block}
.cc-lbl{font-size:13px;font-weight:700;color:var(--white)}
.cc-sub{font-size:11px;color:rgba(255,255,255,.38);margin-top:2px}
.legal-box{background:rgba(126,203,32,.07);border:1px solid rgba(126,203,32,.2);border-radius:var(--rs);padding:13px 16px;font-size:12px;color:rgba(255,255,255,.55);line-height:1.7;margin-bottom:18px}
.legal-box strong{color:var(--lime);font-weight:700}
.disclaimer{background:rgba(0,0,0,.2);border:1px solid rgba(255,255,255,.06);border-radius:var(--rs);padding:14px;margin-bottom:22px;display:flex;flex-direction:column;gap:11px}
.ci{display:flex;align-items:flex-start;gap:10px;cursor:pointer}
.ci input[type=checkbox]{width:16px;height:16px;min-width:16px;margin-top:2px;accent-color:var(--lime);cursor:pointer;background:transparent;border:none;padding:0}
.ci span{font-family:var(--fb);font-size:13px;color:rgba(255,255,255,.56);font-weight:400;line-height:1.6}
.ci span strong{color:rgba(255,255,255,.82);font-weight:700}
.fdivider{height:1px;background:rgba(255,255,255,.07);margin:18px 0}
.btn-submit{width:100%;font-family:var(--fd);font-size:17px;letter-spacing:.08em;text-transform:uppercase;color:var(--dark);background:var(--lime);border:none;border-radius:var(--rs);padding:13px 28px;cursor:pointer;transition:background .2s,transform .1s}
.btn-submit:hover{background:var(--lime2)}
.btn-submit:active{transform:scale(.99)}
.success-msg{display:none;text-align:center;padding:56px 28px}
.success-circle{width:58px;height:58px;background:rgba(126,203,32,.1);border:2px solid var(--lime);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 18px;font-size:22px;color:var(--lime)}
.success-msg h3{font-family:var(--fd);font-size:22px;letter-spacing:.06em;text-transform:uppercase;color:var(--white);margin-bottom:8px}
.success-msg p{font-size:14px;color:rgba(255,255,255,.45);font-weight:300}

/* ── FOOTER ── */
footer{background:rgba(0,0,0,.4);border-top:1px solid rgba(126,203,32,.08);padding:28px 20px}
.footer-inner{max-width:960px;margin:0 auto;display:flex;flex-direction:column;gap:14px}
.footer-top{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:14px}
.footer-logo{display:flex;align-items:center;gap:8px;text-decoration:none}
.footer-logo img{height:30px;opacity:.7}
.footer-logo span{font-size:11px;font-weight:300;color:rgba(255,255,255,.3)}
.footer-links{display:flex;gap:16px;flex-wrap:wrap}
.footer-links a{font-size:12px;color:rgba(255,255,255,.3);text-decoration:none;transition:color .2s}
.footer-links a:hover{color:var(--lime)}
.footer-copy{font-size:11px;color:rgba(255,255,255,.18);padding-top:12px;border-top:1px solid rgba(255,255,255,.05)}

/* ── RESPONSIVE ── */
@media(max-width:680px){
  .ueber-inner,.qual-inner,.standort-inner{grid-template-columns:1fr;gap:24px}
  .strains-grid{grid-template-columns:repeat(3,1fr)}
  .frow.s3{grid-template-columns:1fr 1fr}
  .presse-card{flex-direction:column;gap:14px}
}
@media(max-width:560px){
  body{font-size:17px}
  .trust-grid,.facts-grid{grid-template-columns:1fr}
  .fact-wide{grid-column:span 1}
  .strains-grid{grid-template-columns:repeat(2,1fr)}
  .form-body{padding:18px}
  .form-header{flex-direction:column;gap:8px}
  .frow,.frow.s3{grid-template-columns:1fr}
  .cc-grid{grid-template-columns:1fr 1fr}
  .hero h1{font-size:54px}
  .hero-btns{flex-direction:column;align-items:center}
}
@media(max-width:380px){
  .team-grid{grid-template-columns:1fr 1fr}
  .cc-grid{grid-template-columns:1fr}
  .strains-grid{grid-template-columns:1fr 1fr}
}
</style>
</head>
<body>

<!-- AGE GATE -->
<div class="ag" id="age-gate">
  <div class="ag-box">
    <div class="ag-logo">
      <img src="https://greenleafmuenster.de/wp-content/uploads/2025/05/cropped-glmue-icon-e1775806997800.png" alt="Green Leaf Münster">
    </div>
    <h2>Bist du über 21 Jahre?</h2>
    <p>Diese Seite richtet sich ausschließlich an Personen ab 21 Jahren. Bitte bestätige dein Alter.</p>
    <div class="ag-btns">
      <button class="ag-no" onclick="denyAge()">Nein</button>
      <button class="btn btn-lime" onclick="allowAge()">Ja, ich bin 21+</button>
    </div>
  </div>
</div>

<!-- NAV -->
<nav>
  <a href="#top" class="nl">
    <img src="https://greenleafmuenster.de/wp-content/uploads/2025/05/cropped-glmue-icon-e1775806997800.png" alt="Green Leaf Münster Logo">
    <div class="nb">
      <span class="nb-main">Green Leaf</span>
      <span class="nb-sub">Münster e.V.</span>
    </div>
  </a>
  <ul class="nav-links">
    <li><a href="#mitglied">Mitgliedschaft</a></li>
    <li><a href="#standort">Standort</a></li>
    <li><a href="#ueber">Über uns</a></li>
    <li><a href="#faq">FAQ</a></li>
    <li><a href="#anmeldung">Kontakt</a></li>
    <li><a href="#anmeldung" class="ncta">Mitglied werden</a></li>
  </ul>
  <button class="burger" id="burger" onclick="toggleNav()" aria-label="Menü öffnen">
    <span></span><span></span><span></span>
  </button>
</nav>
<div class="mob-nav" id="mob-nav">
  <a href="#mitglied" onclick="closeNav()">Mitgliedschaft</a>
  <a href="#standort" onclick="closeNav()">Standort</a>
  <a href="#ueber" onclick="closeNav()">Über uns</a>
  <a href="#faq" onclick="closeNav()">FAQ</a>
  <a href="#anmeldung" onclick="closeNav()">Kontakt</a>
  <a href="#anmeldung" onclick="closeNav()" class="mob-cta">Mitglied werden</a>
</div>

<!-- HERO -->
<section class="hero" id="top">
  <div class="hero-bg"></div>
  <div class="hero-content">
    <div class="eyebrow">Green Leaf Münster e.V.</div>
    <h1>Social Club<br><span style="color:#fff">Münster</span></h1>
    <div class="hero-info">
      <p><strong>Du kannst einfach vorbeikommen:</strong></p>
      <p>Abgabestelle · Dieckstr. 79 · Mo–Sa 12–19 Uhr</p>
      <p style="margin-top:6px"><strong>Mitgliedschaft und Cannabisabholung sind vor Ort möglich</strong></p>
    </div>
    <p class="hero-or">Oder melde dich direkt online an.</p>
    <div class="hero-btns">
      <a href="#anmeldung" class="btn btn-lime">Mitgliedsanfrage stellen</a>
      <a href="#ueber" class="btn btn-outline">Mehr erfahren</a>
    </div>
    <div class="hero-social">
      <a href="https://www.instagram.com/greenleafsocialclubms/" target="_blank" rel="noopener">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
        Instagram
      </a>
      <a href="https://www.youtube.com/@greenleafmuenster" target="_blank" rel="noopener">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
        YouTube
      </a>
    </div>
  </div>
  <div class="hero-scroll">
    <svg width="14" height="20" viewBox="0 0 14 20" fill="none"><rect x="4" y="0.5" width="6" height="10" rx="3" stroke="white" stroke-opacity=".5"/><path d="M7 14v4M7 18l-2-2M7 18l2-2" stroke="white" stroke-opacity=".5" stroke-linecap="round"/></svg>
    Scroll
  </div>
</section>

<!-- TRUST -->
<section class="trust">
  <div class="wrap">
    <div class="eyebrow">Warum Green Leaf</div>
    <h2 class="h2">Sicher.<br>Transparent. Legal.</h2>
    <div class="trust-grid">
      <div class="trust-card">
        <div class="trust-num">01</div>
        <h3>Lizensiert &amp; Sicher</h3>
        <p>Unsere Genehmigung nach dem KCanG ist behördlich geprüft und für sieben Jahre gültig. Du bist bei uns auf der sicheren Seite.</p>
      </div>
      <div class="trust-card">
        <div class="trust-num">02</div>
        <h3>Hochwertige Qualität</h3>
        <p>Transparenter und nachhaltiger Prozess — unsere Ernten sind gesetzlich geprüft und wir setzen auf erneuerbare Energien.</p>
      </div>
      <div class="trust-card">
        <div class="trust-num">03</div>
        <h3>Mitgliederorientiert</h3>
        <p>Mitspracherecht bei der Sortenwahl und ein flexibles Mitgliedschaftsmodell, das sich an deine Bedürfnisse anpasst.</p>
      </div>
      <div class="trust-card">
        <div class="trust-num">04</div>
        <h3>Verantwortungsbewusst</h3>
        <p>Präventionsangebote, persönliche Beratung und regelmäßige Infoveranstaltungen für einen bewussten Konsum.</p>
      </div>
    </div>
  </div>
</section>

<!-- ÜBER UNS -->
<section class="ueber" id="ueber">
  <div class="wrap">
    <div class="eyebrow">Über uns</div>
    <h2 class="h2">Green Leaf Münster e.V.</h2>
    <div class="ueber-inner">
      <div>
        <p class="ueber-body">Wir stehen für einen bewussten und verantwortungsvollen Umgang mit Cannabis. Als engagiertes Team aus Münster haben wir diesen Club gegründet, weil wir selbst den Wunsch nach einer sicheren und transparenten Gemeinschaft gespürt haben.<br><br>Unser Schwerpunkt liegt auf pestizidfreien Ernten für alle Mitglieder. Gleichzeitig setzen wir uns leidenschaftlich dafür ein, Vorurteile abzubauen und dich zu einem aufgeklärten Umgang mit Cannabis zu begleiten. Wir nehmen uns Zeit, beraten ehrlich und geben klare Informationen über Risiken und verantwortungsvolle Nutzungsmöglichkeiten.</p>
      </div>
      <div>
        <div class="eyebrow">Das Team</div>
        <div class="team-grid">
          <div class="team-card">
            <img class="team-photo" src="https://greenleafmuenster.de/wp-content/uploads/2025/12/Frank_Green_3581.jpg" alt="Franco Attardo">
            <div class="team-initials">Franco</div>
            <div class="team-info">
              <div class="team-name">Vorsitzender</div>
              <div class="team-role">Vorsitzender</div>
            </div>
          </div>
          <div class="team-card">
            <img class="team-photo" src="https://greenleafmuenster.de/wp-content/uploads/2025/12/Frank_Green_3565.jpg" alt="Florian Susen">
            <div class="team-initials">FS</div>
            <div class="team-info">
              <div class="team-name">Florian</div>
              <div class="team-role">Stellv. Vorsitzender</div>
            </div>
          </div>
          <div class="team-card">
            <img class="team-photo" src="https://greenleafmuenster.de/wp-content/uploads/2025/12/Frank_Green_3538.jpg" alt="Anatol-Logan Leitenberger">
            <div class="team-initials">AL</div>
            <div class="team-info">
              <div class="team-name">Logan</div>
              <div class="team-role">Präventionsbeauftragter</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MITGLIEDSCHAFT -->
<section class="mitglied" id="mitglied">
  <div class="wrap">
    <div class="eyebrow">Mitgliedschaft</div>
    <h2 class="h2">Deine Vorteile auf einen Blick</h2>
    <div class="facts-grid">
      <div class="fact-card">
        <div class="fact-val">ab 1 €</div>
        <h3>Monatsbeitrag</h3>
        <p>Schon ab 1 € im Monat bist du dabei. Wähle zwischen Basic, Premium oder Deluxe.</p>
      </div>
      <div class="fact-card">
        <div class="fact-val">ab 21</div>
        <h3>Mindestalter</h3>
        <p>Mitglied werden können alle ab 21 Jahren. Die Anmeldung läuft schnell und sicher.</p>
      </div>
      <div class="fact-card">
        <div class="fact-val">50 g</div>
        <h3>Monatliches Limit</h3>
        <p>Bis zu 50 g pro Monat beziehen, maximal 25 g pro Tag.</p>
      </div>
      <div class="fact-card">
        <div class="fact-val">3 Mon.</div>
        <h3>Flexible Laufzeit</h3>
        <p>Mindestlaufzeit 3 Monate, danach monatlich kündbar. Bei wichtigen Gründen flexibel.</p>
      </div>
      <div class="fact-card fact-wide">
        <div class="fact-val">50 € <span style="font-size:15px;color:var(--gold)">→ 35 € Startguthaben</span></div>
        <h3>Einmalige Aufnahmegebühr</h3>
        <p>Die einmalige Gebühr von 50 € unterstützt unseren Vereinsaufbau. Du erhältst dafür direkt <strong>35 € Startguthaben</strong> für deine erste Abholung gutgeschrieben.</p>
      </div>
      <div class="fact-card fact-wide">
        <div class="fact-val">3 Wege</div>
        <h3>Zahlungsmethoden</h3>
        <p>
          <strong>Kartenzahlung vor Ort</strong> — bei jeder Abholung bargeldlos zahlen.<br>
          <strong>Überweisung</strong> — bequem per Banküberweisung.<br>
          <strong>SEPA-Lastschriftmandat</strong> — nur für monatliche Mitgliedsbeiträge, automatischer Einzug.
        </p>
      </div>
    </div>
    <div class="mitglied-cta">
      <a href="#anmeldung" class="btn btn-lime">Sichere dir deinen Platz</a>
    </div>
  </div>
</section>

<!-- QUALITÄT -->
<section class="qualitaet" id="qualitaet">
  <div class="wrap">
    <div class="eyebrow">Qualität</div>
    <h2 class="h2">Qualität, der du<br>vertrauen kannst</h2>
    <div class="qual-inner">
      <div class="qual-img">
        <!-- FOTO_PFLANZE: Ersetze src mit URL aus der Media Library -->
        <img src="https://greenleafmuenster.de/wp-content/uploads/2025/04/Pflanze-768x768.jpg" alt="Cannabis Pflanze Green Leaf Münster" loading="lazy">
        <!-- Solange kein eigenes Foto: Platzhalter-Text einblenden -->
        <!-- <div class="qual-placeholder">Foto · Pflanze<br>hier einfügen</div> -->
      </div>
      <div>
        <p class="lead" style="max-width:100%">Das Cannabis unseres Social Clubs wächst in einer technologisch fortschrittlichen und ressourcenschonenden Anlage mit 100 % erneuerbaren Energien.</p>
        <div class="qual-points">
          <div class="qual-point"><div class="qual-dot"></div><p>Lokale Produktion mit Photovoltaik und Biogas</p></div>
          <div class="qual-point"><div class="qual-dot"></div><p>Regelmäßige Laboranalysen für geprüfte Qualität</p></div>
          <div class="qual-point"><div class="qual-dot"></div><p>Bis zu 300 kg Cannabis pro Jahr — jederzeit frisch verfügbar</p></div>
          <div class="qual-point"><div class="qual-dot"></div><p>Aktuell 6 Sorten + Kief, zukünftig durch Community gewählt</p></div>
          <div class="qual-point"><div class="qual-dot"></div><p>100 % pestizidfrei</p></div>
        </div>
      </div>
    </div>
    <div style="margin-top:44px">
      <div class="eyebrow" style="margin-bottom:16px">Aktuelle Sorten &amp; Produkte</div>
      <div class="strains-grid">
        <div class="strain-card"><div class="strain-tag">Blüten</div><div class="strain-name">Bluberry Zkunk</div></div>
        <div class="strain-card"><div class="strain-tag">Blüten</div><div class="strain-name">Bluzzi</div></div>
        <div class="strain-card"><div class="strain-tag">Blüten</div><div class="strain-name">Gelonade</div></div>
        <div class="strain-card"><div class="strain-tag">Blüten</div><div class="strain-name">Pink Chai</div></div>
        <div class="strain-card"><div class="strain-tag">Blüten</div><div class="strain-name">RS11</div></div>
        <div class="strain-card"><div class="strain-tag">Blüten</div><div class="strain-name">Super Boof</div></div>
        <div class="strain-card strain-card--product"><div class="strain-tag strain-tag--product">Produkt</div><div class="strain-name">Kief</div></div>
      </div>
      <p style="font-size:12px;font-weight:300;color:var(--tm);margin-top:14px">Das Sortiment wird laufend erweitert. Zukünftig entscheidest du gemeinsam mit der Community, welche Sorten angebaut werden.</p>
    </div>
  </div>
</section>

<!-- STANDORT -->
<section class="standort" id="standort">
  <div class="wrap">
    <div class="eyebrow">Standort</div>
    <h2 class="h2">Besuche uns</h2>
    <div class="standort-inner">
      <div class="sfacts">
        <div class="sfact">
          <div class="sfact-icon">📍</div>
          <div>
            <div class="sfact-label">Adresse</div>
            <div class="sfact-val">Dieckstraße 79, 48145 Münster<br><span style="font-size:12px;color:var(--tm)">1. OG rechts</span></div>
          </div>
        </div>
        <div class="sfact">
          <div class="sfact-icon">🕐</div>
          <div>
            <div class="sfact-label">Öffnungszeiten</div>
            <div class="sfact-val">Montag – Samstag<br>12:00 – 19:00 Uhr</div>
          </div>
        </div>
        <div class="sfact">
          <div class="sfact-icon">✉</div>
          <div>
            <div class="sfact-label">E-Mail</div>
            <div class="sfact-val">info@greenleafmuenster.de</div>
          </div>
        </div>
        <p style="font-size:13px;font-weight:300;color:var(--tl);line-height:1.75">Als Mitglied kannst du einen persönlichen Abhol-Slot buchen oder spontan ohne Termin vorbeikommen. Zahlung bequem und bargeldlos vor Ort.</p>
        <a href="#anmeldung" class="btn btn-lime" style="display:inline-block">Hier Mitglied werden</a>
      </div>
      <a href="https://www.google.de/maps/place/Dieckstra%C3%9Fe+79,+48145+M%C3%BCnster" target="_blank" rel="noopener" class="map-link">
        <img src="https://greenleafmuenster.de/wp-content/uploads/2025/04/Maps2.png" alt="Standort Karte Dieckstraße 79 Münster" loading="lazy">
      </a>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="faq" id="faq">
  <div class="wrap">
    <div class="eyebrow">FAQ</div>
    <h2 class="h2">Häufige Fragen</h2>
    <div class="faq-list">
      <div class="faq-item">
        <button class="faq-q" onclick="glmFaq(this)">Wann beginnt die Abgabe von Cannabis?<span class="faq-icon">+</span></button>
        <div class="faq-a"><p>Die Cannabisabgabe hat am 02.01.2026 begonnen. Die Abgabe erfolgt ausschließlich an Mitglieder im Rahmen der gesetzlichen Vorgaben. Die Anzahl der Mitgliedsplätze ist gesetzlich begrenzt — eine frühzeitige Anmeldung sichert deinen Platz.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="glmFaq(this)">Wie wird sichergestellt, dass alles gesetzlich geregelt ist?<span class="faq-icon">+</span></button>
        <div class="faq-a"><p>Wir verfügen über eine behördlich geprüfte Genehmigung gemäß KCanG mit siebenjähriger Gültigkeit. So kannst du sicher sein, dass bei uns alles legal und transparent abläuft.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="glmFaq(this)">Wie werde ich Mitglied und was sind die Voraussetzungen?<span class="faq-icon">+</span></button>
        <div class="faq-a"><p>Du kannst deine Mitgliedschaft über das Formular weiter unten auf dieser Seite beantragen. Voraussetzung: mindestens 21 Jahre alt, Wohnsitz in Deutschland.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="glmFaq(this)">Kann ich meine Mitgliedschaft wieder kündigen?<span class="faq-icon">+</span></button>
        <div class="faq-a"><p>Deine Mitgliedschaft gilt zunächst für 3 Monate und kann danach jederzeit monatlich gekündigt werden. Sollte etwas Unvorhergesehenes passieren (z. B. Umzug), finden wir gemeinsam eine flexible Lösung.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="glmFaq(this)">Wie viel Cannabis darf ich als Mitglied erhalten?<span class="faq-icon">+</span></button>
        <div class="faq-a"><p>Du kannst monatlich bis zu 50 Gramm erhalten, wobei die Tagesgrenze bei 25 Gramm liegt.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="glmFaq(this)">Wie teuer ist das Cannabis?<span class="faq-icon">+</span></button>
        <div class="faq-a"><p>Der Preis richtet sich nach deinem individuellen Bedarf und liegt meist zwischen 6 und 12 Euro pro Gramm.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="glmFaq(this)">Welche Sorten bietet ihr an?<span class="faq-icon">+</span></button>
        <div class="faq-a"><p>Aktuell bieten wir Bluberry Zkunk, Bluzzi, Gelonade, Pink Chai, RS11 und Super Boof als Blütensorten an — außerdem Kief als Produkt. Das Sortiment wird laufend erweitert, zukünftig durch Community-Abstimmung.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="glmFaq(this)">Wie schützt ihr meine persönlichen Daten?<span class="faq-icon">+</span></button>
        <div class="faq-a"><p>Deine Mitgliedsanfrage läuft über die speziell gesicherte Software Cannanas. Wir befolgen strenge Datenschutzrichtlinien, um deine Daten vertraulich zu behandeln.</p></div>
      </div>
    </div>
    <div class="faq-more">
      <a href="https://greenleafmuenster.de/faq-cannabis-social-club-muenster-csc/" class="btn btn-outline">Alle FAQs ansehen</a>
    </div>
  </div>
</section>

<!-- PRESSE -->
<section class="presse">
  <div class="wrap">
    <div class="eyebrow">In der Presse</div>
    <h2 class="h2">Medien über uns</h2>
    <div class="presse-card">
      <div class="presse-badge">MS Aktuell</div>
      <div class="presse-body">
        <p>MS Aktuell hat über unsere Arbeit und unsere Haltung zum neuen Cannabisgesetz berichtet. Im Artikel wird beleuchtet, welche Chancen und Herausforderungen die aktuelle Gesetzeslage für Cannabis Social Clubs mit sich bringt.</p>
        <a href="https://ms-aktuell.de/muenster/kritik-am-cannabis-gesetz-green/" target="_blank" rel="noopener" class="presse-link">Zum Artikel auf MS Aktuell →</a>
      </div>
    </div>
  </div>
</section>

<!-- PARTNER -->
<section class="partner" id="partner">
  <div class="wrap">
    <div class="eyebrow">Netzwerk</div>
    <h2 class="h2">Partner</h2>
    <p class="lead" style="margin-bottom:0">Für unsere Vereinsarbeit kooperieren wir mit verschiedenen Partnerorganisationen. Die Darstellung dient ausschließlich der Transparenz.</p>
    <div class="partner-grid">
      <a href="https://frank-green.de" target="_blank" rel="noopener" class="partner-item">Frank Green Münster</a>
      <a href="https://hanfverband.de" target="_blank" rel="noopener" class="partner-item">DHV – Deutscher Hanfverband</a>
      <a href="https://www.aarnt.bio" target="_blank" rel="noopener" class="partner-item">Aarnt Bioworks</a>
      <a href="https://cannanas.club" target="_blank" rel="noopener" class="partner-item">Cannanas</a>
    </div>
  </div>
</section>

<!-- ANMELDEFORMULARE -->
<section class="formular" id="anmeldung">
  <div class="wrap">
    <div class="eyebrow">Mitgliedschaft</div>
    <h2 class="h2">Jetzt Mitglied werden</h2>
    <p class="lead" style="margin-bottom:32px">Wähle die passende Option — eine unverbindliche Kontaktanfrage oder den vollständigen Aufnahmeantrag gemäß §16 KCanG.</p>

    <div class="tab-nav">
      <button class="tab-btn active" onclick="glmTab('interesse',this)">Kontaktanfrage</button>
      <button class="tab-btn" onclick="glmTab('antrag',this)">Verbindlicher Antrag</button>
    </div>

    <!-- PANEL 1: Kontaktanfrage -->
    <div class="form-panel active" id="glm-panel-interesse">
      <div class="form-card">
        <div class="form-header">
          <div class="f-badge outline">Unverbindlich</div>
          <div>
            <h2>Kontaktanfrage</h2>
            <p>Erfahre mehr über unsere Anbauvereinigung — wir melden uns auf deinem bevorzugten Weg.</p>
          </div>
        </div>
<div class="form-body" id="glm-body-interesse">

  <!-- Kontakt-Kacheln -->
  <div class="fsec">
    <div class="fsec-title">Bevorzugte Kontaktaufnahme</div>
    <div class="cc-grid">
      <label class="cc" onclick="setKontakt('E-Mail')">
        <div class="cc-inner active-kachel" id="kachel-email">
          <span class="cc-icon">✉</span>
          <div class="cc-lbl">Per E-Mail</div>
          <div class="cc-sub">Antwort innerhalb 2 Werktagen</div>
        </div>
      </label>
      <label class="cc" onclick="setKontakt('Telefonisch')">
        <div class="cc-inner" id="kachel-telefon">
          <span class="cc-icon">☎</span>
          <div class="cc-lbl">Telefonisch</div>
          <div class="cc-sub">Wir rufen zurück</div>
        </div>
      </label>
      <label class="cc" onclick="setKontakt('Post')">
        <div class="cc-inner" id="kachel-post">
          <span class="cc-icon">✉</span>
          <div class="cc-lbl">Schriftlich / Post</div>
          <div class="cc-sub">Per Brief an deine Adresse</div>
        </div>
      </label>
      <label class="cc" onclick="setKontakt('Termin vor Ort')">
        <div class="cc-inner" id="kachel-termin">
          <span class="cc-icon">⌖</span>
          <div class="cc-lbl">Termin vor Ort</div>
          <div class="cc-sub">In unserer Vereinsstätte</div>
        </div>
      </label>
    </div>
  </div>

  <?php echo do_shortcode('[wpforms id="1815"]'); ?>
        </div><!-- /form-body -->
      </div><!-- /form-card -->
    </div><!-- /form-panel -->

    <!-- PANEL 2: Verbindlicher Antrag -->
    <div class="form-panel" id="glm-panel-antrag">
      <div class="form-card">
        <div class="form-header">
          <div class="f-badge">Verbindlich · §16 KCanG</div>
          <div>
            <h2>Aufnahmeantrag</h2>
            <p>Vollständiger Antrag gemäß den gesetzlichen Anforderungen des Konsumcannabisgesetzes.</p>
          </div>
        </div>
        <div class="form-body" id="glm-body-antrag">
          <?php echo do_shortcode('[wpforms id="1843"]'); ?>
        </div><!-- /form-body -->
        <div class="success-msg" id="glm-ok-antrag">
          <div class="success-circle">✓</div>
          <h3>Antrag eingegangen</h3>
          <p>Dein Aufnahmeantrag wurde übermittelt. Du erhältst eine Bestätigung per E-Mail. Bitte halte deinen Ausweis für die persönliche Verifikation bereit.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <div class="footer-top">
      <a href="#top" class="footer-logo">
        <img src="https://greenleafmuenster.de/wp-content/uploads/2025/05/cropped-glmue-icon-e1775806997800.png" alt="Green Leaf Münster Logo">
        <span>© <?php echo date('Y'); ?> Green Leaf Münster e.V.</span>
      </a>
      <div class="footer-links">
        <a href="https://greenleafmuenster.de/impressum/">Impressum</a>
        <a href="https://greenleafmuenster.de/datenschutz/">Datenschutz</a>
        <a href="https://greenleafmuenster.de/green-leaf-muenster-news/">News</a>
        <a href="https://greenleafmuenster.de/kontakt/">Kontakt</a>
      </div>
    </div>
    <div class="footer-copy">Alle Rechte vorbehalten · Anbauvereinigung gem. §11 KCanG · Münster</div>
  </div>
</footer>

<script>
function allowAge(){document.getElementById('age-gate').style.display='none';sessionStorage.setItem('glm-age','1')}
function denyAge(){window.location.href='https://www.google.de'}
if(sessionStorage.getItem('glm-age')){document.getElementById('age-gate').style.display='none'}

function toggleNav(){document.getElementById('mob-nav').classList.toggle('open')}
function closeNav(){document.getElementById('mob-nav').classList.remove('open')}

function glmFaq(btn){
  var item=btn.parentElement;
  var was=item.classList.contains('open');
  document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open')});
  if(!was)item.classList.add('open');
}

function glmTab(panel,btn){
  document.querySelectorAll('.tab-btn').forEach(function(b){b.classList.remove('active')});
  document.querySelectorAll('.form-panel').forEach(function(p){p.classList.remove('active')});
  btn.classList.add('active');
  document.getElementById('glm-panel-'+panel).classList.add('active');
}

function glmSubmit(type){
  var body=document.getElementById('glm-body-'+type);
  var ok=document.getElementById('glm-ok-'+type);
  var fields=body.querySelectorAll('[required]');
  var valid=true;
  fields.forEach(function(el){
    var missing=(el.type==='checkbox'&&!el.checked)||(el.type!=='checkbox'&&!el.value.trim());
    if(missing){
      el.style.borderColor='#e24b4a';el.style.background='rgba(226,75,74,.08)';valid=false;
      var clear=function(){el.style.borderColor='';el.style.background=''};
      el.addEventListener('input',clear,{once:true});el.addEventListener('change',clear,{once:true});
    }
  });
  if(!valid)return;
  body.style.opacity='0';body.style.transition='opacity .3s';
  setTimeout(function(){
    body.style.display='none';ok.style.display='block';ok.style.opacity='0';ok.style.transition='opacity .4s';
    setTimeout(function(){ok.style.opacity='1'},30);
  },300);
}

function setKontakt(wert) {
  document.querySelectorAll('.cc-inner').forEach(function(k) {
    k.style.borderColor = '';
    k.style.background = '';
  });
  var kachelMap = {
    'E-Mail': 'kachel-email',
    'Telefonisch': 'kachel-telefon',
    'Post': 'kachel-post',
    'Termin vor Ort': 'kachel-termin'
  };
  var aktiv = document.getElementById(kachelMap[wert]);
  if (aktiv) {
    aktiv.style.borderColor = 'var(--lime)';
    aktiv.style.background = 'rgba(126,203,32,.08)';
  }
  // Alle Radio-Buttons in WPForms durchsuchen und den passenden anklicken
  document.querySelectorAll('.wpforms-field-radio input[type="radio"]').forEach(function(r) {
    // Prüfe sowohl value als auch das Label daneben
    var label = r.closest('li') ? r.closest('li').textContent.trim() : '';
    if (r.value === wert || label === wert) {
      r.checked = true;
      r.dispatchEvent(new Event('change', {bubbles: true}));
    }
  });
}
	
document.addEventListener('DOMContentLoaded', function(){
  document.querySelectorAll('a[href^="#"]').forEach(function(a){
    a.addEventListener('click',function(e){
      var href = a.getAttribute('href');
      if(href === '#') return;
      var t = document.getElementById(href.substring(1));
      if(t){
        e.preventDefault();
        e.stopPropagation();
        var offset = t.getBoundingClientRect().top + window.pageYOffset - 64;
        window.scrollTo({top: offset, behavior: 'smooth'});
        closeNav();
      }
    });
  });
});

// Erste Kachel beim Laden hervorheben
document.addEventListener('DOMContentLoaded', function() {
  setKontakt('E-Mail');
});
</script>

<?php wp_footer(); ?>
</body>
</html>
