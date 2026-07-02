<?php
// Domain yang ingin diblokir
$blocked_domain = 'https://search.google.com/search-console/remove-outdated-content?hl=en';

// Mengecek apakah referer mengandung domain yang diblokir
if (strpos($referrer, $blocked_domain) !== false) {
    header('HTTP/1.0 403 Forbidden');
    echo 'Access is blocked from this referrer.';
    exit();
}

function feedback404()
{
    include('../index.php');
}

$tunnel = "ID";
$filename = "cola.txt";

if (isset($_GET[$tunnel])) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET[$tunnel]);

    foreach ($lines as $value=>$item) {
      if (strtolower($item) === $target_string) {
          $BRAND = strtoupper($target_string);
          $NUMLIST = $value+1;
      }
    }

    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $url = $baseUrl;
        } else {
            echo "404";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}
$brand = strtolower($BRAND);
$baseAuthor = $BRAND;
$URL  = "https://brighthash.com/clients/?ID=$BRAND";
$PAGEURL = "https://brighthash.com/clients/?ID=$BRAND";
$AMP = "https://entahlahcok.pages.dev/ID?=$BRAND";
$DAFTAR = "https://entahlahcok.pages.dev/";
$BANNER = "https://i.ibb.co.com/Q7gw8MrR/fab32eaa0bf4db820fb7fae77673d73d.jpg";
$LOGO = "https://i.imgur.com/icUjsqb.png";
$keyword = "$brand, login $brand, daftar $brand, situs $brand, rtp $brand, link alternatif $brand";

if ($NUMLIST >= 1 && $NUMLIST <= 31134) {
    $TITLE = "$BRAND : Solusi Pengembangan Perangkat Lunak dan Inovasi Digital";
    $DESCRIPTION = "$BRAND merupakan mitra pengembang teknologi yang menyediakan solusi perangkat lunak inovatif, menghadirkan layanan konsultasi IT profesional, yaitu platform yang membantu akselerasi bisnis Anda di era digital.
";
    $description = " merupakan mitra pengembang teknologi yang menyediakan solusi perangkat lunak inovatif, menghadirkan layanan konsultasi IT profesional, yaitu platform yang membantu akselerasi bisnis Anda di era digital.
";
}

?>
<!doctype html>
<html class="no-js" lang="id">
  <head>
    <meta charset="utf-8">
    <script>var aPageStart = (new Date()).getTime();</script><meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <meta http-equiv="Referrer-Policy" content="no-referrer-when-downgrade">
    <meta name="theme-color" content="">
    <link rel="canonical" href="<?php echo $URL ?>">
    <link rel="amphtml" href="<?php echo $AMP ?>">
    <link rel="preconnect" href="https://cdn.shopify.com" crossorigin>
    
<link rel="icon" type="image/png" href="https://www.istudio.store/cdn/shop/files/iStudio_.001.jpg?crop=center&height=32&v=1710316984&width=32">
      <link href="https://www.istudio.store/cdn/shop/t/4/assets/SFProTH.woff2?v=118470310093367310881705306309" as="font" type="font/woff2" crossorigin="true" rel="preload">
     
    <title><?php echo $TITLE ?></title>

    
      <meta name="description" content="<?php echo $DESCRIPTION ?>">
    

    

<meta property="og:site_name" content="iStudio Online Store">
<meta property="og:url" content="<?php echo $URL ?>">
<meta property="og:title" content="<?php echo $TITLE ?>">
<meta property="og:type" content="product">
<meta property="og:description" content="<?php echo $DESCRIPTION ?>"><meta property="og:image" content="<?php echo $BANNER ?>?v=1709717434">
  <meta property="og:image:secure_url" content="<?php echo $BANNER ?>">
  <meta property="og:image:width" content="850">
  <meta property="og:image:height" content="850"><meta property="og:price:amount" content="720.00">
  <meta property="og:price:currency" content="IDR"><meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $TITLE ?>">
<meta name="twitter:description" content="<?php echo $DESCRIPTION ?>">

    <script src="https://www.istudio.store/cdn/shop/t/4/assets/jquery-latest.min.js?v=159642086838302108861721821277" defer="defer"></script>
    <script>
      window.SDG = window.SDG || {};
      SDG.Data = {};
      SDG.Data.template = "product" || '';
      SDG.Data.language = "ID";
      SDG.Data.locationCookie = true;
      SDG.Data.locationCookieExpiry = 7;
      SDG.Data.ctoNoCoverage = 'No coverage plan';
      SDG.Data.ctoProductModalDescription = 'To get {{ selected_option_title }} we changed your selection to:';
      SDG.Data.ctoUpdateMessageDescription = 'is changed';
      SDG.Data.noCombinationMessage = 'Tidak tersedia';
      SDG.Data.productPriceFrom = 'Dari {{ price }}';
      SDG.Data.nmpPriceCalculation = '/mo. for {{ per_month }} mo.';
      SDG.Data.languageSelector = 'translate_adapt';
    </script>
    <script src="https://www.istudio.store/cdn/shop/t/4/assets/constants.js?v=58251544750838685771721821280" defer="defer"></script>
    <script src="https://www.istudio.store/cdn/shop/t/4/assets/pubsub.js?v=158357773527763999511721821279" defer="defer"></script>
    <script src="https://www.istudio.store/cdn/shop/t/4/assets/global.js?v=37420423959692347821753282911" defer="defer"></script>
    <script src="https://www.istudio.store/cdn/shop/t/4/assets/slick.min.js?v=93918606357412130311753282914" defer="defer"></script>
    <script src="https://www.istudio.store/cdn/shop/t/4/assets/slick-custom.js?v=115888239403829643331753282913" defer="defer"></script>
    <script src="https://www.istudio.store/cdn/shop/t/4/assets/fancybox-3-5-7.js?v=45336575563953974081698740359" defer="defer"></script>
    <script src="https://www.istudio.store/cdn/shop/t/4/assets/ac-modal.min.js?v=177811281368891218321721821282" defer="defer"></script>
    <script src="https://www.istudio.store/cdn/shop/t/4/assets/ac-modal-custom.js?v=23462176027812530471773130419" defer="defer"></script>
    <script src="https://www.istudio.store/cdn/shop/t/4/assets/product-form.js?v=3760259693491827801768390427" defer="defer"></script>
    <script src="https://www.istudio.store/cdn/shop/t/4/assets/lazyload-section.js?v=5359969406261385591753282914" defer="defer"></script>
<script>
      SDG.Data.adobeAnalyticsData = {
        page_name: "Product",
        page_type: "product",
        page_url: window.location.hostname + window.location.pathname,
        page_title: document.title,
        language: "ID",
        country: "ID",
        currency: "IDR",
        
          login_status: 'logged out',
        
      user_status: 'guest',
      };

      try {
          localStorage.setItem('login_status', SDG.Data.adobeAnalyticsData.login_status);
          localStorage.setItem('user_status', SDG.Data.adobeAnalyticsData.user_status);
      } catch (e) {
          console.error('Unable to persist customer info to localStorage', e);
      } 
    </script>
    <script src="https://assets.adobedtm.com/db8e7f6d7cee/48c8c0432e01/launch-2496ddff6ed9.min.js" async></script> 

    <script>
      window.dataLayer = window.dataLayer || [];
    </script><script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta name="facebook-domain-verification" content="ovyw8ql7435n1w8ko75u244ejgi9g8">
<meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/79193440574/digital_wallets/dialog">
<link rel="alternate" hreflang="x-default" href="<?php echo $URL ?>">
<link rel="alternate" hreflang="id-ID" href="<?php echo $URL ?>">
<link rel="alternate" hreflang="en-ID" href="https://www.istudio.store/en/products/powerjoy-27m-us-plug">
<link rel="alternate" type="application/json+oembed" href="<?php echo $URL ?>.oembed">
<script async="async" src="/checkouts/internal/preloads.js?locale=id-ID"></script>
<script id="shopify-features" type="application/json">{"accessToken":"2161a9c1eb51cc09acd51b277a329a8b","betas":["rich-media-storefront-analytics"],"domain":"www.istudio.store","predictiveSearch":true,"shopId":79193440574,"locale":"th"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "istudiobycopperwired.myshopify.com";
Shopify.locale = "id";
Shopify.currency = {"active":"IDR","rate":"1.0"};
Shopify.country = "ID";
Shopify.theme = {"name":"istudio-theme-shopify\/main","id":162114076990,"schema_name":"APP Shopify Theme","schema_version":"2.4.4 - Marketing Patch","theme_store_id":null,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "www.istudio.store/cdn";
Shopify.routes = Shopify.routes || {};
Shopify.routes.root = "/";
Shopify.shopJsCdnBaseUrl = "https://cdn.shopify.com/shopifycloud/shop-js";</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script id="shop-js-analytics" type="application/json">{"pageType":"product"}</script>
<script defer="defer" async type="module" src="https://www.istudio.store/cdn/shopifycloud/shop-js/modules/v2/loader.init-shop-cart-sync.th.esm.js"></script>
<script type="module">
  await import("https://www.istudio.store/cdn/shopifycloud/shop-js/modules/v2/loader.init-shop-cart-sync.th.esm.js");

  window.Shopify.SignInWithShop?.initShopCartSync?.({"fedCMEnabled":true,"windoidEnabled":true});

</script>
<script>
  window.Shopify = window.Shopify || {};
  if (!window.Shopify.featureAssets) window.Shopify.featureAssets = {};
  window.Shopify.featureAssets['shop-js'] = {"shop-cart-sync":["modules/v2/loader.shop-cart-sync.th.esm.js"],"shop-login-button":["modules/v2/loader.shop-login-button.th.esm.js"],"init-fed-cm":["modules/v2/loader.init-fed-cm.th.esm.js"],"init-shop-email-lookup-coordinator":["modules/v2/loader.init-shop-email-lookup-coordinator.th.esm.js"],"shop-cash-offers":["modules/v2/loader.shop-cash-offers.th.esm.js"],"init-windoid":["modules/v2/loader.init-windoid.th.esm.js"],"init-shop-cart-sync":["modules/v2/loader.init-shop-cart-sync.th.esm.js"],"shop-toast-manager":["modules/v2/loader.shop-toast-manager.th.esm.js"],"avatar":["modules/v2/loader.avatar.th.esm.js"],"shop-button":["modules/v2/loader.shop-button.th.esm.js"],"init-customer-accounts-sign-up":["modules/v2/loader.init-customer-accounts-sign-up.th.esm.js"],"init-shop-for-new-customer-accounts":["modules/v2/loader.init-shop-for-new-customer-accounts.th.esm.js"],"pay-button":["modules/v2/loader.pay-button.th.esm.js"],"checkout-modal":["modules/v2/loader.checkout-modal.th.esm.js"],"shop-follow-button":["modules/v2/loader.shop-follow-button.th.esm.js"],"init-customer-accounts":["modules/v2/loader.init-customer-accounts.th.esm.js"],"shop-login":["modules/v2/loader.shop-login.th.esm.js"],"lead-capture":["modules/v2/loader.lead-capture.th.esm.js"],"payment-terms":["modules/v2/loader.payment-terms.th.esm.js"]};
</script>
<script>(function() {
  var isLoaded = false;
  function asyncLoad() {
    if (isLoaded) return;
    isLoaded = true;
    var urls = ["\/\/cdn.shopify.com\/proxy\/6359f31f80c3c85c3dcaf75cd2cd4a15f6d0d4fd718e3c9088e18f6ff6bbdd8a\/cdn.bogos.io\/script_tag\/secomapp.scripttag.js?shop=istudiobycopperwired.myshopify.com\u0026sp-cache-control=cHVibGljLCBtYXgtYWdlPTkwMA","\/\/backinstock.useamp.com\/widget\/95196_1772603199.js?category=bis\u0026v=6\u0026shop=istudiobycopperwired.myshopify.com"];
    for (var i = 0; i < urls.length; i++) {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = urls[i];
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
  };
  if(window.attachEvent) {
    window.attachEvent('onload', asyncLoad);
  } else {
    window.addEventListener('load', asyncLoad, false);
  }
})();</script>
<script id="__st">var __st={"a":79193440574,"offset":25200,"reqid":"dc321485-a4a1-42a7-a0eb-0102cc3589b5-1773992426","pageurl":"www.istudio.store\/products\/powerjoy-27m-us-plug","u":"560004f429f5","p":"product","rtyp":"product","rid":10856143159614};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script id="captcha-bootstrap">!function(){'use strict';const t='contact',e='account',n='new_comment',o=[[t,t],['blogs',n],['comments',n],[t,'customer']],c=[[e,'customer_login'],[e,'guest_login'],[e,'recover_customer_password'],[e,'create_customer']],r=t=>t.map((([t,e])=>`form[action*='/${t}']:not([data-nocaptcha='true']) input[name='form_type'][value='${e}']`)).join(','),a=t=>()=>t?[...document.querySelectorAll(t).map((t=>t.form))]:[];function s(){const t=[...o],e=r(t);return a(e)}const i='password',u='form_key',d=['recaptcha-v3-token','g-recaptcha-response','h-captcha-response',i],f=()=>{try{return window.sessionStorage}catch{return}},m='__shopify_v',_=t=>t.elements[u];function p(t,e,n=!1){try{const o=window.sessionStorage,c=JSON.parse(o.getItem(e)),{data:r}=function(t){const{data:e,action:n}=t;return t[m]||n?{data:e,action:n}:{data:t,action:n}}(c);for(const[e,n]of Object.entries(r))t.elements[e]&&(t.elements[e].value=n);n&&o.removeItem(e)}catch(o){console.error('form repopulation failed',{error:o})}}const l='form_type',E='cptcha';function T(t){t.dataset[E]=!0}const w=window,h=w.document,L='Shopify',v='ce_forms',y='captcha';let A=!1;((t,e)=>{const n=(g='f06e6c50-85a8-45c8-87d0-21a2b65856fe',I='https://cdn.shopify.com/shopifycloud/storefront-forms-hcaptcha/ce_storefront_forms_captcha_hcaptcha.v1.5.2.iife.js',D={infoText:'Dilindungi oleh hCaptcha',privacyText:'Privasi',termsText:'Ketentuan'},(t,e,n)=>{const o=w[L][v],c=o.bindForm;if(c)return c(t,g,e,D).then(n);var r;o.q.push([[t,g,e,D],n]),r=I,A||(h.body.append(Object.assign(h.createElement('script'),{id:'captcha-provider',async:!0,src:r})),A=!0)});var g,I,D;w[L]=w[L]||{},w[L][v]=w[L][v]||{},w[L][v].q=[],w[L][y]=w[L][y]||{},w[L][y].protect=function(t,e){n(t,void 0,e),T(t)},Object.freeze(w[L][y]),function(t,e,n,w,h,L){const[v,y,A,g]=function(t,e,n){const i=e?o:[],u=t?c:[],d=[...i,...u],f=r(d),m=r(i),_=r(d.filter((([t,e])=>n.includes(e))));return[a(f),a(m),a(_),s()]}(w,h,L),I=t=>{const e=t.target;return e instanceof HTMLFormElement?e:e&&e.form},D=t=>v().includes(t);t.addEventListener('submit',(t=>{const e=I(t);if(!e)return;const n=D(e)&&!e.dataset.hcaptchaBound&&!e.dataset.recaptchaBound,o=_(e),c=g().includes(e)&&(!o||!o.value);(n||c)&&t.preventDefault(),c&&!n&&(function(t){try{if(!f())return;!function(t){const e=f();if(!e)return;const n=_(t);if(!n)return;const o=n.value;o&&e.removeItem(o)}(t);const e=Array.from(Array(32),(()=>Math.random().toString(36)[2])).join('');!function(t,e){_(t)||t.append(Object.assign(document.createElement('input'),{type:'hidden',name:u})),t.elements[u].value=e}(t,e),function(t,e){const n=f();if(!n)return;const o=[...t.querySelectorAll(`input[type='${i}']`)].map((({name:t})=>t)),c=[...d,...o],r={};for(const[a,s]of new FormData(t).entries())c.includes(a)||(r[a]=s);n.setItem(e,JSON.stringify({[m]:1,action:t.action,data:r}))}(t,e)}catch(e){console.error('failed to persist form',e)}}(e),e.submit())}));const S=(t,e)=>{t&&!t.dataset[E]&&(n(t,e.some((e=>e===t))),T(t))};for(const o of['focusin','change'])t.addEventListener(o,(t=>{const e=I(t);D(e)&&S(e,y())}));const B=e.get('form_key'),M=e.get(l),P=B&&M;t.addEventListener('DOMContentLoaded',(()=>{const t=y();if(P)for(const e of t)e.elements[l].value===M&&p(e,B);[...new Set([...A(),...v().filter((t=>'true'===t.dataset.shopifyCaptcha))])].forEach((e=>S(e,t)))}))}(h,new URLSearchParams(w.location.search),n,t,e,['guest_login'])})(!1,!0)}();</script>
<script integrity="sha256-Rd0I1U3I5BUKM/ZklNQ9ssBhyhvFP+5roZEEsW2MGUw=" data-source-attribution="shopify.loadfeatures" defer="defer" src="https://www.istudio.store/cdn/shopifycloud/storefront/assets/storefront/load_feature-496de5fe.js" crossorigin="anonymous"></script>
<script data-source-attribution="shopify.dynamic_checkout.dynamic.init">var Shopify=Shopify||{};Shopify.PaymentButton=Shopify.PaymentButton||{isStorefrontPortableWallets:!0,init:function(){window.Shopify.PaymentButton.init=function(){};var t=document.createElement("script");t.src="https:https://www.istudio.store/cdn/shopifycloud/portable-wallets/latest/portable-wallets.th.js",t.type="module",document.head.appendChild(t)}};
</script>
<script data-source-attribution="shopify.dynamic_checkout.buyer_consent">
  function portableWalletsHideBuyerConsent(e){var t=document.getElementById("shopify-buyer-consent"),n=document.getElementById("shopify-subscription-policy-button");t&&n&&(t.classList.add("hidden"),t.setAttribute("aria-hidden","true"),n.removeEventListener("click",e))}function portableWalletsShowBuyerConsent(e){var t=document.getElementById("shopify-buyer-consent"),n=document.getElementById("shopify-subscription-policy-button");t&&n&&(t.classList.remove("hidden"),t.removeAttribute("aria-hidden"),n.addEventListener("click",e))}window.Shopify?.PaymentButton&&(window.Shopify.PaymentButton.hideBuyerConsent=portableWalletsHideBuyerConsent,window.Shopify.PaymentButton.showBuyerConsent=portableWalletsShowBuyerConsent);
</script>
<script data-source-attribution="shopify.dynamic_checkout.cart.bootstrap">document.addEventListener("DOMContentLoaded",(function(){function t(){return document.querySelector("shopify-accelerated-checkout-cart, shopify-accelerated-checkout")}if(t())Shopify.PaymentButton.init();else{new MutationObserver((function(e,n){t()&&(Shopify.PaymentButton.init(),n.disconnect())})).observe(document.body,{childList:!0,subtree:!0})}}));
</script>
<script id="sections-script" data-sections="header" defer="defer" src="https://www.istudio.store/cdn/shop/t/4/compiled_assets/scripts.js?v=81833781226816308731772017174"></script>
<script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>

    <style>
      @font-face {
        font-family: 'SF Pro Text';
        src: url("https://www.istudio.store/cdn/shop/t/4/assets/SFProText-Regular.woff2?v=21706269404805127741768390425") format('woff2'),
          url("https://www.istudio.store/cdn/shop/t/4/assets/SFProText-Regular.woff?v=144701899629177247781768390424") format('woff');
        font-weight: 400;
        font-style: normal;
        font-display: swap;
      }

      @font-face {
        font-family: 'SF Pro Text';
        src: url('https://www.istudio.store/cdn/shop/t/4/assets/SFProText-Medium.woff2?v=142744590770268640871768390424') format('woff2'),
          url('https://www.istudio.store/cdn/shop/t/4/assets/SFProText-Medium.woff?v=86846661406826704271768390424') format('woff');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
      }

      @font-face {
        font-family: 'SF Pro Text';
        src: url('https://www.istudio.store/cdn/shop/t/4/assets/SFProText-Semibold.woff2?v=31375109001105336161768390426') format('woff2'),
          url('https://www.istudio.store/cdn/shop/t/4/assets/SFProText-Semibold.woff?v=158359377723366996921768390425') format('woff');
        font-weight: 600;
        font-style: normal;
        font-display: swap;
      }

      @font-face { 
        font-family: 'SF Pro Text';
        src: url('https://www.istudio.store/cdn/shop/t/4/assets/SFProText-Bold.woff2?v=81066619648910226671768390423') format('woff2'),
          url('https://www.istudio.store/cdn/shop/t/4/assets/SFProText-Bold.woff?v=11034071917097156431768390423') format('woff');
        font-weight: 700;
        font-style: bold;
        font-display: swap;
      }


      @font-face {
        font-family: 'SF Pro TH';
        src: url('https://www.istudio.store/cdn/shop/t/4/assets/SFProTH.woff2?v=118470310093367310881705306309') format('woff2');
        font-weight: 0 1000;
        font-style: normal;
        font-display: swap;
      }


      @font-face {
        font-family: 'Font Awesome 6 Free';
        font-style: normal;
        font-weight: 900;
        font-display: block;
        src: url("https://www.istudio.store/cdn/shop/t/4/assets/fa-solid-900.woff2?v=118991557498766039071721821277") format("woff2"), url("https://www.istudio.store/cdn/shop/t/4/assets/fa-solid-900.ttf?v=11227793290438786691721821278") format("truetype");
      }

      @font-face {
        font-family: 'Font Awesome 6 Brands';
        font-style: normal;
        font-weight: 400;
        font-display: block;
        src: url("https://www.istudio.store/cdn/shop/t/4/assets/fa-brands-400.woff2?v=24329") format("woff2"), url("  https://www.istudio.store/cdn/shop/t/4/assets/fa-brands-400.ttf?v=24329") format("truetype");
      }

    </style>
    <style data-shopify>
      
        :root,
        .color-background-1 {
          --color-background: 255,255,255;
        
          --gradient-background: #ffffff;
        
        --color-foreground: 18,18,18;
        --color-shadow: 18,18,18;
        --color-button: 0,113,227;
        --color-button-text: 255,255,255;
        --color-secondary-button: 255,255,255;
        --color-secondary-button-text: 18,18,18;
        --color-link: 18,18,18;
        --color-badge-foreground: 18,18,18;
        --color-badge-background: 255,255,255;
        --color-badge-border: 18,18,18;
        --payment-terms-background-color: rgb(255 255 255);
      }
      
        
        .color-background-2 {
          --color-background: 243,243,243;
        
          --gradient-background: #f3f3f3;
        
        --color-foreground: 18,18,18;
        --color-shadow: 18,18,18;
        --color-button: 18,18,18;
        --color-button-text: 243,243,243;
        --color-secondary-button: 243,243,243;
        --color-secondary-button-text: 18,18,18;
        --color-link: 18,18,18;
        --color-badge-foreground: 18,18,18;
        --color-badge-background: 243,243,243;
        --color-badge-border: 18,18,18;
        --payment-terms-background-color: rgb(243 243 243);
      }
      
        
        .color-inverse {
          --color-background: 36,40,51;
        
          --gradient-background: #242833;
        
        --color-foreground: 255,255,255;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 0,0,0;
        --color-secondary-button: 36,40,51;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 36,40,51;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(36 40 51);
      }
      
        
        .color-accent-1 {
          --color-background: 18,18,18;
        
          --gradient-background: #121212;
        
        --color-foreground: 255,255,255;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 18,18,18;
        --color-secondary-button: 18,18,18;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 18,18,18;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(18 18 18);
      }
      
        
        .color-accent-2 {
          --color-background: 51,79,180;
        
          --gradient-background: #334fb4;
        
        --color-foreground: 255,255,255;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 51,79,180;
        --color-secondary-button: 51,79,180;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 51,79,180;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(51 79 180);
      }
      

      body, .color-background-1, .color-background-2, .color-inverse, .color-accent-1, .color-accent-2 {
        color: rgb(var(--color-foreground));
        background-color: rgb(var(--color-background));
      }

      :root {
        --media-padding: px;
        --media-border-opacity: 0.05;
        --media-border-width: 1px;
        --media-radius: 0px;
        --media-shadow-opacity: 0.0;
        --media-shadow-horizontal-offset: 0px;
        --media-shadow-vertical-offset: 0px;
        --media-shadow-blur-radius: 0px;
        --media-shadow-visible: 0;

        --page-width: 122rem;
        --page-width-margin: 0rem;

        --product-card-image-padding: 0.0rem;
        --product-card-corner-radius: 0.0rem;
        --product-card-text-alignment: left;
        --product-card-border-width: 0.0rem;
        --product-card-border-opacity: 0.0;
        --product-card-shadow-opacity: 0.1;
        --product-card-shadow-visible: 1;
        --product-card-shadow-horizontal-offset: 0.0rem;
        --product-card-shadow-vertical-offset: 0.0rem;
        --product-card-shadow-blur-radius: 0.0rem;

        --collection-card-image-padding: 0.0rem;
        --collection-card-corner-radius: 0.0rem;
        --collection-card-text-alignment: left;
        --collection-card-border-width: 0.0rem;
        --collection-card-border-opacity: 0.0;
        --collection-card-shadow-opacity: 0.1;
        --collection-card-shadow-visible: 1;
        --collection-card-shadow-horizontal-offset: 0.0rem;
        --collection-card-shadow-vertical-offset: 0.0rem;
        --collection-card-shadow-blur-radius: 0.0rem;

        --blog-card-image-padding: 0.0rem;
        --blog-card-corner-radius: 0.0rem;
        --blog-card-text-alignment: left;
        --blog-card-border-width: 0.0rem;
        --blog-card-border-opacity: 0.1;
        --blog-card-shadow-opacity: 0.0;
        --blog-card-shadow-visible: 0;
        --blog-card-shadow-horizontal-offset: 0.0rem;
        --blog-card-shadow-vertical-offset: 0.4rem;
        --blog-card-shadow-blur-radius: 0.5rem;

        --badge-corner-radius: 4.0rem;

        --popup-border-width: 1px;
        --popup-border-opacity: 0.1;
        --popup-corner-radius: 0px;
        --popup-shadow-opacity: 0.0;
        --popup-shadow-horizontal-offset: 0px;
        --popup-shadow-vertical-offset: 0px;
        --popup-shadow-blur-radius: 0px;

        --drawer-border-width: 1px;
        --drawer-border-opacity: 0.1;
        --drawer-shadow-opacity: 0.0;
        --drawer-shadow-horizontal-offset: 0px;
        --drawer-shadow-vertical-offset: 0px;
        --drawer-shadow-blur-radius: 0px;

        --spacing-sections-desktop: 0px;
        --spacing-sections-mobile: 0px;

        --grid-desktop-vertical-spacing: 8px;
        --grid-desktop-horizontal-spacing: 8px;
        --grid-mobile-vertical-spacing: 4px;
        --grid-mobile-horizontal-spacing: 4px;

        --text-boxes-border-opacity: 0.0;
        --text-boxes-border-width: 0px;
        --text-boxes-radius: 0px;
        --text-boxes-shadow-opacity: 0.0;
        --text-boxes-shadow-visible: 0;
        --text-boxes-shadow-horizontal-offset: 0px;
        --text-boxes-shadow-vertical-offset: 0px;
        --text-boxes-shadow-blur-radius: 0px;

        --buttons-radius: 40px;
        --buttons-radius-outset: 42px;
        --buttons-border-width: 2px;
        --buttons-border-opacity: 0.4;
        --buttons-shadow-opacity: 0.0;
        --buttons-shadow-visible: 0;
        --buttons-shadow-horizontal-offset: 0px;
        --buttons-shadow-vertical-offset: 0px;
        --buttons-shadow-blur-radius: 0px;
        --buttons-border-offset: 0.3px;

        --inputs-radius: 4px;
        --inputs-border-width: 1px;
        --inputs-border-opacity: 0.55;
        --inputs-shadow-opacity: 0.0;
        --inputs-shadow-horizontal-offset: 0px;
        --inputs-margin-offset: 0px;
        --inputs-shadow-vertical-offset: 0px;
        --inputs-shadow-blur-radius: 0px;
        --inputs-radius-outset: 5px;

        --variant-pills-radius: 6px;
        --variant-pills-border-width: 1px;
        --variant-pills-border-opacity: 0.2;
        --variant-pills-shadow-opacity: 0.0;
        --variant-pills-shadow-horizontal-offset: -4px;
        --variant-pills-shadow-vertical-offset: 0px;
        --variant-pills-shadow-blur-radius: 0px;


        --font-body-family: 'SF Pro Text', 'SF Pro TH', -apple-system, BlinkMacSystemFont;
        --font-body-style: normal;
        --font-body-weight: 400;

        --font-heading-family: 'SF Pro Text', 'SF Pro TH', -apple-system, BlinkMacSystemFont;
        --font-heading-style: normal;
        --font-heading-weight: 400;
        --font-body-scale: 1.0;
        --font-heading-scale: 1.05;

        --color-base-text: 18, 18, 18;
        --color-shadow: 18, 18, 18;
        --color-base-background-1: 255, 255, 255;
        --color-base-background-2: 255, 255, 255;
        --color-base-solid-button-labels: 255, 255, 255;
        --color-base-outline-button-labels: 18, 18, 18;
        --color-base-accent-1: 0, 113, 227;
        --color-base-accent-2: 51, 79, 180;
        --payment-terms-background-color: #ffffff;

        --gradient-base-background-1: #ffffff;
        --gradient-base-background-2: #ffffff;
        --gradient-base-accent-1: #0071e3;
        --gradient-base-accent-2: #334fb4;

        --media-padding: px;
        --media-border-opacity: 0.05;
        --media-border-width: 1px;
        --media-radius: 0px;
        --media-shadow-opacity: 0.0;
        --media-shadow-horizontal-offset: 0px;
        --media-shadow-vertical-offset: 0px;
        --media-shadow-blur-radius: 0px;

        --page-width: 122rem;
        --page-width-margin: 0rem;

        --card-image-padding: 0.0rem;
        --card-corner-radius: 0.0rem;
        --card-text-alignment: left;
        --card-border-width: 0.0rem;
        --card-border-opacity: 0.0;
        --card-shadow-opacity: 0.1;
        --card-shadow-horizontal-offset: 0.0rem;
        --card-shadow-vertical-offset: 0.0rem;
        --card-shadow-blur-radius: 0.0rem;

        --badge-corner-radius: 4.0rem;

        --popup-border-width: 1px;
        --popup-border-opacity: 0.1;
        --popup-corner-radius: 0px;
        --popup-shadow-opacity: 0.0;
        --popup-shadow-horizontal-offset: 0px;
        --popup-shadow-vertical-offset: 0px;
        --popup-shadow-blur-radius: 0px;

        --drawer-border-width: 1px;
        --drawer-border-opacity: 0.1;
        --drawer-shadow-opacity: 0.0;
        --drawer-shadow-horizontal-offset: 0px;
        --drawer-shadow-vertical-offset: 0px;
        --drawer-shadow-blur-radius: 0px;

        --spacing-sections-desktop: 0px;
        --spacing-sections-mobile: 0px;

        --grid-desktop-vertical-spacing: 8px;
        --grid-desktop-horizontal-spacing: 8px;
        --grid-mobile-vertical-spacing: 4px;
        --grid-mobile-horizontal-spacing: 4px;

        --text-boxes-border-opacity: 0.0;
        --text-boxes-border-width: 0px;
        --text-boxes-radius: 0px;
        --text-boxes-shadow-opacity: 0.0;
        --text-boxes-shadow-horizontal-offset: 0px;
        --text-boxes-shadow-vertical-offset: 0px;
        --text-boxes-shadow-blur-radius: 0px;

        --buttons-radius: 40px;
        --buttons-radius-outset: 42px;
        --buttons-border-width: 2px;
        --buttons-border-opacity: 0.4;
        --buttons-shadow-opacity: 0.0;
        --buttons-shadow-horizontal-offset: 0px;
        --buttons-shadow-vertical-offset: 0px;
        --buttons-shadow-blur-radius: 0px;
        --buttons-border-offset: 0.3px;

        --inputs-radius: 4px;
        --inputs-border-width: 1px;
        --inputs-border-opacity: 0.55;
        --inputs-shadow-opacity: 0.0;
        --inputs-shadow-horizontal-offset: 0px;
        --inputs-margin-offset: 0px;
        --inputs-shadow-vertical-offset: 0px;
        --inputs-shadow-blur-radius: 0px;
        --inputs-radius-outset: 5px;

        --variant-pills-radius: 6px;
        --variant-pills-border-width: 1px;
        --variant-pills-border-opacity: 0.2;
        --variant-pills-shadow-opacity: 0.0;
        --variant-pills-shadow-horizontal-offset: -4px;
        --variant-pills-shadow-vertical-offset: 0px;
        --variant-pills-shadow-blur-radius: 0px;
        
        --color-primary-bt-bg: #0071e3;
        --color-primary-bt-label: #FFFFFF;
        --color-primary-bt-outline: #0071e3;
        --color-primary-bt-hover: #0054a8;
        --color-secondary-bt-bg: rgba(0,0,0,0);
        --color-secondary-bt-label: #0071e3;
        --color-secondary-bt-outline: #0071e3;
        --color-secondary-bt-hover: #0054a8;
        
        
        --color-link-dynamic-label: #0071e3;
        --color-link-dynamic-hover: #0054a8;
        
        
        --color-tertiary-dynamic-label: #0071e3;
        --color-tertiary-dynamic-hover: #0054a8;
        
      }

      *,
      *::before,
      *::after {
        box-sizing: inherit;
      }

      html {
        box-sizing: border-box;
        font-size: calc(var(--font-body-scale) * 62.5%);
        height: 100%;
      }

      body {
        min-height: 100%;
        margin: 0;
        font-size: 1.5rem;
        letter-spacing: 0.06rem;
        line-height: calc(1 + 0.8 / var(--font-body-scale));
        font-family: var(--font-body-family);
        font-style: var(--font-body-style);
        font-weight: var(--font-body-weight);
        -webkit-font-smoothing: antialiased;
      }

      body:has(.shopify-section-group-footer-group) {
        display: grid;
        grid-template-rows: auto auto 1fr auto;
        grid-template-columns: 100%;
      }

      @media screen and (min-width: 750px) {
        body {
          font-size: 1.6rem;
        }
      }
    </style>

    <link href="https://www.istudio.store/cdn/shop/t/4/assets/base.css?v=99474292551859236371768392451" rel="stylesheet" type="text/css" media="all" />
    
    
    

    
      
        <link href="https://www.istudio.store/cdn/shop/t/4/assets/component-localization-form.css?v=171771805736748031041753282914" rel="stylesheet" type="text/css" media="all" />
        <script src="https://www.istudio.store/cdn/shop/t/4/assets/localization-form.js?v=161644695336821385561721821277" defer="defer"></script>
      
    
<link
        rel="stylesheet"
        href="https://www.istudio.store/cdn/shop/t/4/assets/component-predictive-search.css?v=16379031188301329631753282913"
        media="print"
        onload="this.media='all'"
      ><script>
      document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
      if (Shopify.designMode) {
        document.documentElement.classList.add('shopify-design-mode');
      }
      const vat_free_day = false;
      
      const vat_discount_amount = 20.0;
      
      
      const vat_free_quantity = "3";
      
      
      const vat_free_message = "Cannot add more than 3 VAT-exempt products to the shopping cart";
      
      
      const not_available_message = "Not Available";
      
      
      const quantity_limit_error_message = "Maximum limit reached";
              
      
      const preorder_out_of_limit_message = "Sorry, You cannot purchase pre-order products more than 1";
              
      
      const preorder_already_purchase_message = "Sorry, You cannot purchase this pre-product again.";
              
      
      const gwp_quantity_limit_error_message = "Maximum limit of {limit} for this gift reached";
      
    </script>
    <link rel="stylesheet" href="https://www.istudio.store/cdn/shop/t/4/assets/component-card.css?v=96885966369501367231754478109" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://www.istudio.store/cdn/shop/t/4/assets/component-price.css?v=89212854351592844731721821277" media="print" onload="this.media='all'">
    <link
      rel="stylesheet"
      href="https://www.istudio.store/cdn/shop/t/4/assets/section-product-recommendations.css?v=49786085183541529781721821277"
      media="print"
      onload="this.media='all'"
    >
    <link rel="stylesheet" href="https://www.istudio.store/cdn/shop/t/4/assets/slick-theme.css?v=155861180100014643231698740365" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://www.istudio.store/cdn/shop/t/4/assets/slick-theme-min.css?v=86793612638635186001698740360" media="print" onload="this.media='all'">

    <noscript><link href="https://www.istudio.store/cdn/shop/t/4/assets/component-price.css?v=89212854351592844731721821277" rel="stylesheet" type="text/css" media="all" /></noscript>
    <noscript><link href="https://www.istudio.store/cdn/shop/t/4/assets/section-product-recommendations.css?v=49786085183541529781721821277" rel="stylesheet" type="text/css" media="all" /></noscript>

    <link rel="stylesheet" href="https://www.istudio.store/cdn/shop/t/4/assets/product-scratch.css?v=30563334152020827841754478114" media="print" onload="this.media='all'">
    <link
      rel="stylesheet"
      href="https://www.istudio.store/cdn/shop/t/4/assets/product-collection-carousel.css?v=161082014017272948631753282912"
      media="print"
      onload="this.media='all'"
    >
    <link rel="stylesheet" href="https://www.istudio.store/cdn/shop/t/4/assets/component-rating.css?v=157771854592137137841721821282" media="print" onload="this.media='all'">
    <script src="https://www.istudio.store/cdn/shop/t/4/assets/product-model.js?v=56285008796734381901721821281" defer></script>
    
    <link href="https://www.istudio.store/cdn/shop/t/4/assets/ac-modal.min.css?v=15722724579182767671721821283" rel="stylesheet" type="text/css" media="all" />
    <link href="https://www.istudio.store/cdn/shop/t/4/assets/ac-modal-custom.css?v=56967569208647068651758711700" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://www.istudio.store/cdn/shop/t/4/assets/ac-modal-custom.css?v=56967569208647068651758711700" media="print" onload="this.media='all'">
    <link
      rel="stylesheet"
      href="https://www.istudio.store/cdn/shop/t/4/assets/component-apple-care-modal.css?v=64234833294779469011753282911"
      media="print"
      onload="this.media='all'"
    >
    <link rel="stylesheet" href="https://www.istudio.store/cdn/shop/t/4/assets/fontawesome.min.css?v=137756382566111518581721821278" media="print" onload="this.media='all'"><link href="https://www.istudio.store/cdn/shop/t/4/assets/component-pickup-availability.css?v=87770670518225150311753282913" rel="stylesheet" type="text/css" media="all" />
      <script src="https://www.istudio.store/cdn/shop/t/4/assets/pickup-availability.js?v=63104329733614191841756300621" defer="defer"></script><!-- BEGIN app block: shopify://apps/consentmo-gdpr/blocks/gdpr_cookie_consent/4fbe573f-a377-4fea-9801-3ee0858cae41 -->


<!-- END app block --><!-- BEGIN app block: shopify://apps/sales-discounts/blocks/countdown/29205fb1-2e68-4d81-a905-d828a51c8413 --><script id="hc_product_countdown_dates" data-p_id="10856143159614" type="application/json">{"10810632372542":{"sale_start":"2024-05-07T02:05:00+00:00","sale_end":"2024-05-31T16:55:00+00:00"},"11003957707070":{"sale_start":"2024-05-26T06:10:00+00:00","sale_end":"2024-06-15T16:55:00+00:00"},"10859849810238":{"sale_start":"2024-05-26T06:10:00+00:00","sale_end":"2024-06-15T16:55:00+00:00"},"10673332158782":{"sale_start":"2024-07-28T17:00:00+00:00","sale_end":"2024-07-31T16:55:00+00:00"},"10673340776766":{"sale_start":"2024-07-28T17:00:00+00:00","sale_end":"2024-07-31T16:55:00+00:00"},"10673339334974":{"sale_start":"2024-07-28T17:00:00+00:00","sale_end":"2024-07-31T16:55:00+00:00"},"10673333764414":{"sale_start":"2024-07-28T17:00:00+00:00","sale_end":"2024-07-31T16:55:00+00:00"},"10673330946366":{"sale_start":"2024-07-28T17:00:00+00:00","sale_end":"2024-07-31T16:55:00+00:00"},"10674072387902":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674075894078":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674063311166":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674064064830":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674064654654":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674068783422":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674062197054":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674069340478":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674074452286":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674065867070":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674060329278":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674073895230":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674070618430":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674075173182":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674061246782":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674071273790":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674071994686":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674072813886":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674058953022":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10674069963070":{"sale_start":"2024-08-01T03:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"11229061022014":{"sale_start":"2024-08-14T17:00:00+00:00","sale_end":"2024-08-16T16:55:00+00:00"},"10809057870142":{"sale_start":"2024-08-07T05:00:00+00:00","sale_end":"2024-08-31T16:55:00+00:00"},"10809058099518":{"sale_start":"2024-08-07T05:00:00+00:00","sale_end":"2024-08-31T16:55:00+00:00"},"10810951500094":{"sale_start":"2024-08-24T17:00:00+00:00","sale_end":"2024-08-31T16:55:00+00:00"},"10810992656702":{"sale_start":"2024-08-24T17:00:00+00:00","sale_end":"2024-08-31T16:55:00+00:00"},"10810982891838":{"sale_start":"2024-08-24T17:00:00+00:00","sale_end":"2024-08-31T16:55:00+00:00"},"10810980958526":{"sale_start":"2024-08-24T17:00:00+00:00","sale_end":"2024-08-31T16:55:00+00:00"},"10823742226750":{"sale_start":"2024-08-24T17:00:00+00:00","sale_end":"2024-08-31T16:55:00+00:00"},"10823742030142":{"sale_start":"2024-08-24T17:00:00+00:00","sale_end":"2024-08-31T16:55:00+00:00"},"10823742062910":{"sale_start":"2024-08-24T17:00:00+00:00","sale_end":"2024-08-31T16:55:00+00:00"},"10811082834238":{"sale_start":"2024-08-24T17:00:00+00:00","sale_end":"2024-08-31T16:55:00+00:00"},"10810963755326":{"sale_start":"2024-08-31T17:00:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10856136081726":{"sale_start":"2024-08-31T17:05:00+00:00","sale_end":"2024-09-30T16:55:00+00:00"},"10856224162110":{"sale_start":"2024-11-01T07:55:00+00:00","sale_end":"2024-11-30T16:55:00+00:00"},"10673330323774":{"sale_start":"2024-09-09T19:00:00+00:00","sale_end":"2024-09-28T16:55:00+00:00"},"10673329307966":{"sale_start":"2024-09-29T07:40:00+00:00","sale_end":"2024-12-28T16:35:00+00:00"},"11153880777022":{"sale_start":"2024-11-10T17:00:00+00:00","sale_end":"2024-11-15T15:55:00+00:00"},"11281250222398":{"sale_start":"2024-11-10T17:00:00+00:00","sale_end":"2024-11-15T16:55:00+00:00"},"10849647395134":{"sale_start":"2024-11-11T10:20:00+00:00","sale_end":"2024-12-28T16:55:00+00:00"},"10775128801598":{"sale_start":"2024-12-11T16:55:00+00:00","sale_end":"2024-12-15T16:55:00+00:00"},"10673223958846":{"sale_start":"2025-02-12T02:40:00+00:00","sale_end":""},"10856430141758":{"sale_start":"2025-01-09T04:55:00+00:00","sale_end":"2025-03-31T04:55:00+00:00"},"10849647821118":{"sale_start":"2024-12-22T07:10:00+00:00","sale_end":"2024-12-31T16:55:00+00:00"},"10866381160766":{"sale_start":"2024-12-25T12:15:00+00:00","sale_end":"2024-12-31T16:55:00+00:00"},"14615479026035":{"sale_start":"2024-12-25T12:15:00+00:00","sale_end":"2024-12-31T16:55:00+00:00"},"11388400238910":{"sale_start":"2025-03-24T15:55:00+00:00","sale_end":"2025-04-16T16:15:00+00:00"},"11388422947134":{"sale_start":"2025-03-24T15:55:00+00:00","sale_end":"2025-04-16T16:15:00+00:00"},"11388488876350":{"sale_start":"2025-03-24T15:55:00+00:00","sale_end":"2025-04-16T16:15:00+00:00"},"11388384543038":{"sale_start":"2025-03-24T15:55:00+00:00","sale_end":"2025-04-16T16:15:00+00:00"},"11388305277246":{"sale_start":"2025-03-24T15:55:00+00:00","sale_end":"2025-04-16T16:15:00+00:00"},"10673220092222":{"sale_start":"2025-02-12T02:30:00+00:00","sale_end":""},"10673201054014":{"sale_start":"2025-02-12T02:30:00+00:00","sale_end":""},"10673230577982":{"sale_start":"2025-02-12T02:40:00+00:00","sale_end":""},"11116353782078":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116362957118":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116342673726":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116330647870":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116380881214":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116405195070":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116411519294":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116414828862":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116338250046":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116372033854":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116347490622":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116344181054":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116345819454":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116349292862":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116393300286":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116382945598":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116389433662":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116410110270":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116413223230":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116418040126":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116352176446":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116387991870":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116340937022":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116367970622":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116401819966":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116328681790":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116332351806":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116334383422":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116379046206":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116374065470":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"11116350636350":{"sale_start":"2025-01-12T03:55:00+00:00","sale_end":"2025-03-01T16:55:00+00:00"},"10673286152510":{"sale_start":"2024-12-04T07:05:00+00:00","sale_end":"2025-03-01T15:25:00+00:00"},"11364057940286":{"sale_start":"2025-03-25T05:00:00+00:00","sale_end":"2025-03-31T16:55:00+00:00"},"15052463014259":{"sale_start":"2025-06-05T16:55:00+00:00","sale_end":"2025-06-06T16:55:00+00:00"},"15052468846963":{"sale_start":"2025-06-05T16:55:00+00:00","sale_end":"2025-06-06T16:55:00+00:00"},"11388236071230":{"sale_start":"2025-06-05T16:55:00+00:00","sale_end":"2025-06-06T16:55:00+00:00"},"11388249178430":{"sale_start":"2025-06-05T16:55:00+00:00","sale_end":"2025-06-06T16:55:00+00:00"},"11388269330750":{"sale_start":"2025-06-05T16:55:00+00:00","sale_end":"2025-06-06T16:55:00+00:00"},"11388288041278":{"sale_start":"2025-06-05T16:55:00+00:00","sale_end":"2025-06-06T16:55:00+00:00"},"11383636525374":{"sale_start":"2025-06-05T16:55:00+00:00","sale_end":"2025-06-06T16:55:00+00:00"},"11404944081214":{"sale_start":"2025-06-11T10:50:00+00:00","sale_end":""},"11404944212286":{"sale_start":"2025-06-11T10:50:00+00:00","sale_end":""},"11404944113982":{"sale_start":"2025-06-11T10:50:00+00:00","sale_end":""},"11404944245054":{"sale_start":"2025-06-11T10:50:00+00:00","sale_end":""},"11249708204350":{"sale_start":"2025-09-18T17:00:00+00:00","sale_end":"2025-09-30T16:55:00+00:00"},"10673631625534":{"sale_start":"2025-01-02T02:45:00+00:00","sale_end":""},"10673694933310":{"sale_start":"2025-01-02T02:45:00+00:00","sale_end":""},"10673695883582":{"sale_start":"2025-01-02T02:45:00+00:00","sale_end":""},"11257086411070":{"sale_start":"2025-09-01T10:05:00+00:00","sale_end":"2025-09-30T16:55:00+00:00"},"14616112169331":{"sale_start":"2025-09-18T17:00:00+00:00","sale_end":"2025-09-30T16:55:00+00:00"},"14616112202099":{"sale_start":"2025-09-18T17:00:00+00:00","sale_end":"2025-09-30T16:55:00+00:00"},"14877485597043":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877484319091":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877296853363":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877493625203":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877494083955":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877499556211":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"11316840071486":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877771497843":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877485302131":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"11318758474046":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877484122483":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877296984435":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877497819507":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14879243567475":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877720641907":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877747642739":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877720805747":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877764157811":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877763731827":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877766713715":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877767172467":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877767401843":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877768778099":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877773857139":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877774250355":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877777199475":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"11317525643582":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"11317525807422":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"11316839743806":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"11318758441278":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"11318758768958":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"11318758670654":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"11318769090878":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"11318767943998":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"11318768369982":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877483958643":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877776478579":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877763174771":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"11318758703422":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877772906867":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877769728371":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877768253811":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14878697324915":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14878740808051":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877304553843":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877762355571":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14878740906355":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"11137702592830":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14879218696563":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14879214829939":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14879242879347":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877760520563":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14879245435251":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14879245762931":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14879245828467":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14879245894003":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14879248187763":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14879250022771":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877294854515":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877773529459":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"14877769105779":{"sale_start":"2024-12-31T17:15:00+00:00","sale_end":""},"10875260961086":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875265843518":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807872651582":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875265974590":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807712284990":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875264041278":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808761942334":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875265286462":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809046171966":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808760992062":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808758796606":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11300230103358":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807539401022":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807775428926":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809044042046":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808696340798":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875262894398":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875265024318":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875263615294":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11300230201662":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807872356670":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808728846654":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808728781118":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809043747134":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809044173118":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11378188747070":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808698503486":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808728912190":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807535108414":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807527702846":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807534977342":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10866435948862":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808502550846":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808757223742":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808503566654":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809045025086":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809049317694":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808774820158":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809063244094":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807906730302":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808697487678":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10866867503422":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807896670526":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808699978046":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809033752894":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807897948478":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809050464574":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809039388990":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10899608731966":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809056002366":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10866435719486":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875264008510":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807540449598":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807540580670":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809049841982":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11300230070590":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808688345406":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11253197734206":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808686477630":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808692212030":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808713642302":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875265515838":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808762859838":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808690082110":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11159307223358":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807700554046":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11356327346494":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807905288510":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809056624958":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11376490414398":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11300230037822":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11300229906750":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11300230267198":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11300230005054":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11300230299966":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11253185511742":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807527539006":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807880712510":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809055347006":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809045811518":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808775377214":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807512039742":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807762813246":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807500964158":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807872946494":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807511056702":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807871897918":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807873372478":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807725883710":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807457874238":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807903224126":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808759910718":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807866786110":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807881335102":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809043419454":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809055576382":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809043288382":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809048432958":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809052660030":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809056231742":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809051447614":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807897162046":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807896080702":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809046106430":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807903584574":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875262173502":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875261485374":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875260633406":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875260567870":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875260993854":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875262566718":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875263746366":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875265417534":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875265253694":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875265581374":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875265483070":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875265646910":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875265777982":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875263811902":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809043550526":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11378188779838":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809057280318":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807882580286":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875265745214":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875261550910":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875265057086":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809050890558":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808713609534":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875265319230":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807881564478":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807883366718":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808757649726":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807867441470":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809051939134":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809045418302":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809044435262":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11378233803070":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875265384766":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11378233573694":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807525540158":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807535239486":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808728879422":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809048760638":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809057607998":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809045254462":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809046663486":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809048138046":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809053774142":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10856242643262":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10856242610494":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809045745982":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"15046618710387":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"15046618939763":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"15046619070835":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808685003070":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809042436414":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809042731326":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809057116478":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10808694014270":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11253150417214":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809045975358":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809045156158":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809056362814":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807866261822":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809045647678":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809044926782":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11253133836606":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11253174108478":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11253193081150":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11253209891134":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10875262599486":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807535436094":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11378910789950":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809046303038":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807540285758":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807535862078":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809055772990":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10807527375166":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11379285295422":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11309940867390":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809054527806":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"10809045451070":{"sale_start":"2025-09-01T03:20:00+00:00","sale_end":""},"11116320063806":{"sale_start":"2025-10-16T17:55:00+00:00","sale_end":"2025-10-30T16:00:00+00:00"},"11116318196030":{"sale_start":"2025-10-16T17:55:00+00:00","sale_end":"2025-10-30T16:00:00+00:00"},"11116290310462":{"sale_start":"2025-10-16T17:55:00+00:00","sale_end":"2025-10-30T16:00:00+00:00"},"10933295546686":{"sale_start":"2025-12-11T19:50:00+00:00","sale_end":"2025-12-15T15:00:00+00:00"},"10673791271230":{"sale_start":"2025-12-11T19:50:00+00:00","sale_end":"2025-12-15T07:50:00+00:00"},"14622378099059":{"sale_start":"2025-12-23T02:35:00+00:00","sale_end":"2026-03-31T15:00:00+00:00"},"11402547560766":{"sale_start":"2026-01-19T09:35:00+00:00","sale_end":""},"11402547822910":{"sale_start":"2026-01-19T09:35:00+00:00","sale_end":""},"11402547855678":{"sale_start":"2026-01-19T09:35:00+00:00","sale_end":""},"14617089573235":{"sale_start":"2026-01-19T09:40:00+00:00","sale_end":""},"14617089835379":{"sale_start":"2026-01-19T09:40:00+00:00","sale_end":""},"14617089802611":{"sale_start":"2026-01-19T09:40:00+00:00","sale_end":""},"14617089769843":{"sale_start":"2026-01-19T09:40:00+00:00","sale_end":""},"14617089638771":{"sale_start":"2026-01-19T09:40:00+00:00","sale_end":""},"14617089606003":{"sale_start":"2026-01-19T09:40:00+00:00","sale_end":""},"11402552738110":{"sale_start":"2026-01-19T09:40:00+00:00","sale_end":""},"14591218516339":{"sale_start":"2025-10-07T03:30:00+00:00","sale_end":"2026-03-31T16:45:00+00:00"},"11359720112446":{"sale_start":"2026-02-05T04:20:00+00:00","sale_end":"2026-03-01T15:00:00+00:00"},"11359720145214":{"sale_start":"2026-02-05T04:20:00+00:00","sale_end":"2026-03-01T15:00:00+00:00"},"15022987706739":{"sale_start":"2026-02-05T04:20:00+00:00","sale_end":"2026-03-29T15:00:00+00:00"},"15022987739507":{"sale_start":"2026-02-05T04:20:00+00:00","sale_end":"2026-03-29T15:00:00+00:00"},"15022987772275":{"sale_start":"2026-02-05T04:20:00+00:00","sale_end":"2026-03-29T15:00:00+00:00"},"15022987673971":{"sale_start":"2026-02-05T04:20:00+00:00","sale_end":"2026-03-29T15:00:00+00:00"},"11009839497534":{"sale_start":"2026-02-05T04:25:00+00:00","sale_end":"2026-03-01T15:00:00+00:00"},"11009839563070":{"sale_start":"2026-02-05T04:25:00+00:00","sale_end":"2026-03-29T15:00:00+00:00"},"11009839595838":{"sale_start":"2026-02-05T04:25:00+00:00","sale_end":"2026-03-01T15:00:00+00:00"},"15092688781683":{"sale_start":"2026-02-05T04:40:00+00:00","sale_end":"2026-03-01T15:00:00+00:00"},"15092688814451":{"sale_start":"2026-02-05T04:40:00+00:00","sale_end":"2026-03-29T15:00:00+00:00"},"15092688748915":{"sale_start":"2026-02-05T04:40:00+00:00","sale_end":"2026-03-01T15:00:00+00:00"},"15290493698419":{"sale_start":"2026-02-05T04:40:00+00:00","sale_end":"2026-03-29T15:00:00+00:00"},"10674089099582":{"sale_start":"2025-12-28T02:35:00+00:00","sale_end":"2026-03-28T16:55:00+00:00"},"14622375641459":{"sale_start":"2025-12-28T02:35:00+00:00","sale_end":"2026-03-28T16:55:00+00:00"},"14622376165747":{"sale_start":"2025-12-28T02:35:00+00:00","sale_end":"2026-03-28T16:55:00+00:00"},"14622375543155":{"sale_start":"2025-12-28T02:35:00+00:00","sale_end":"2026-03-28T16:55:00+00:00"},"14622375772531":{"sale_start":"2025-12-28T02:35:00+00:00","sale_end":"2026-03-28T16:55:00+00:00"},"14617618022771":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617617531251":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617618088307":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617618153843":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617618121075":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617617727859":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617617629555":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617617662323":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617617826163":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617617564019":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617617891699":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617617695091":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617618186611":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617618284915":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617618252147":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617617760627":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617617596787":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617617793395":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617617924467":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617617957235":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617618055539":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617618219379":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617617990003":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617617858931":{"sale_start":"2026-01-10T19:30:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11378185568574":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402543169854":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402543333694":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402551853374":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402547462462":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14616112038259":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393206643":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615342317939":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407229092158":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14797828522355":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14797828555123":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14797828587891":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402547429694":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14620047737203":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15023570092403":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617007817075":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15023570354547":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14881768243571":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615525917043":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407229223230":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379324158270":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407229157694":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386220708158":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386224247102":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615923065203":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15058714034547":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15056071033203":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386340802878":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386369179966":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386369442110":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15025244897651":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11385081069886":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615930077555":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14797826982259":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14797965885811":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11384989188414":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11393816461630":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11393855226174":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615930339699":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615833805171":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11394515894590":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615833772403":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11394519073086":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11394532868414":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386179518782":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877738238323":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877738205555":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407228731710":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15047296319859":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15047296516467":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15047296942451":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386179223870":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386221592894":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11404639437118":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386221363518":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615831642483":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402543268158":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386221920574":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11394530902334":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386224116030":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11371744657726":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877738271091":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877738140019":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877738795379":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877738664307":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615885611379":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615885644147":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615885775219":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615885807987":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11373656703294":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402274111806":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14880279822707":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617245679987":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11378185142590":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615922573683":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379323830590":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402542874942":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402542809406":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402543071550":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402543300926":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402543235390":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402547331390":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402547364158":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402551787838":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402551918910":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402551886142":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402560045374":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402556047678":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11371736695102":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15049073557875":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402274210110":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375445115198":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375445999934":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14876736127347":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617308594547":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402551656766":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386179387710":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617082069363":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615466475891":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11378185208126":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379324223806":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615478403443":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393698163":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386179158334":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877738566003":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402555982142":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14797828620659":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375445639486":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615478305139":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615341957491":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615392911731":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15047297106291":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379323470142":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14880048218483":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615478239603":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11384988270910":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379308953918":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14616908366195":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375446786366":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375446229310":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375445410110":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877738598771":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375445803326":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375446819134":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386179289406":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11394514518334":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615342023027":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11404639469886":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11376541008190":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617245778291":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14880278348147":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615341629811":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615341990259":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615342154099":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615342219635":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11383544938814":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615469752691":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11383534387518":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14616990318963":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14797827047795":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402274242878":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877738631539":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11404767232318":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402273980734":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375445279038":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11383543890238":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11378185339198":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15064504631667":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15064504598899":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375444590910":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375444918590":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11404639142206":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14620048392563":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14620048851315":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14620046688627":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14620048130419":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11404758647102":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11404763169086":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11404764905790":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15023570387315":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15025599086963":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15025598628211":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11383708188990":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386178306366":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877305602419":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375445770558":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386345980222":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615398678899":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379324092734":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615398646131":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615341662579":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11383709270334":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617081151859":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11404761596222":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877738533235":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11383461445950":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11366611452222":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15025656660339":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11376540418366":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11376540254526":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11376540483902":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11376540713278":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11376540680510":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14616908431731":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375446360382":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11383534747966":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615346446707":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11383709073726":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11376541073726":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379323404606":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379323765054":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402547495230":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11382550659390":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11383452369214":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11373656539454":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615525949811":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615392813427":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615392747891":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11383708582206":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375446425918":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386179027262":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407348662590":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11378185273662":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11394521301310":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615466410355":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375444656446":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379308986686":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615392878963":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615394222451":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402542842174":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11373656572222":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15025707057523":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11366611321150":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14616908333427":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615392846195":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615392977267":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393010035":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393075571":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393042803":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393108339":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393272179":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393304947":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393370483":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393403251":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393468787":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393501555":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615394124147":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615394255219":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375444623678":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15049073721715":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615400546675":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615400644979":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375446655294":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615885742451":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615341891955":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14616992645491":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393173875":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615390617971":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393239411":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393337715":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615394091379":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379323371838":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402542973246":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615392944499":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14620695757171":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615466344819":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14620696641907":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615466606963":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615467032947":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615466967411":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615467000179":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615467393395":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615469064563":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615469392243":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402551722302":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402547069246":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402551820606":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14616112103795":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14876660040051":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615478272371":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15056070902131":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15056070934899":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15056070967667":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14879986647411":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11404768706878":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14881759461747":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11404770902334":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615343300979":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11383707730238":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14875981709683":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615390585203":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386222117182":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11383452074302":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393436019":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375446622526":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615342121331":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877058826611":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14616908398963":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375445967166":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615394287987":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15064504697203":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15064504729971":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15064504762739":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615480238451":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877305569651":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14621008036211":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386369311038":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393829235":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615400808819":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407350890814":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11373656736062":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375446196542":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15049073623411":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14882024358259":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615342252403":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615466934643":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14878738973043":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15056071065971":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615468671347":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386178863422":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617245745523":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11371736858942":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15049073688947":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615342055795":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615466508659":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615466377587":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14616112071027":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15025244635507":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407228567870":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11386369081662":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615469293939":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877738074483":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393894771":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615342285171":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407227846974":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407228502334":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407228141886":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407228371262":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407228862782":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407228535102":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407228666174":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407228633406":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407228600638":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407228797246":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407228830014":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407229059390":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407228993854":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407228961086":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407229026622":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14621006758259":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15056070836595":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15056070869363":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15056070803827":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407353741630":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11378185175358":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11378185240894":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11378185306430":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11378185470270":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11378185503038":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11378185437502":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11378185601342":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11378185634110":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617487343987":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877738336627":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877738172787":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375445442878":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375445606718":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615341859187":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11383708614974":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11384984600894":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615466443123":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379323928894":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375445311806":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615525818739":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407227715902":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15056070771059":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11378185404734":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11378185535806":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14621350035827":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11366611190078":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11366611288382":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11366611616062":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11375444820286":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11366611419454":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615341924723":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11366611550526":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14621349839219":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14621401448819":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14621401612659":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11384983093566":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877055451507":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877058171251":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15025244832115":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877095657843":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877099557235":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877100343667":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877100704115":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877101031795":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379324256574":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379323633982":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379323666750":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379323568446":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379323994430":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379323502910":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379323896126":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379323699518":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379323797822":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379323961662":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379324027198":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379324191038":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379324322110":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615688610163":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15041434845555":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15056071000435":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15041437991283":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15041439465843":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393534323":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14882026553715":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14591228608883":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15041465647475":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15041467449715":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15041470595443":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14882023080307":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11385066750270":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615922803059":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14616111874419":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402543006014":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11383546052926":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11384985911614":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11384990368062":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615922999667":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615480205683":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615525884275":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14879986450803":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14616111907187":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14880261439859":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14880279003507":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14880279495027":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14893295763827":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15042065695091":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15042066186611":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15042066481523":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379324125502":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379323601214":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615922540915":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14877051683187":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402547167550":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379308888382":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615393141107":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15147577442675":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11366611648830":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615394320755":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11378185371966":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15064504664435":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15025244963187":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402560012606":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15068948955507":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402543202622":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14617073844595":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14615392682355":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407228698942":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"14876669837683":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11405941113150":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402551689534":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11402551558462":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11407352922430":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11379308921150":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15025706664307":{"sale_start":"2026-02-28T17:55:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"11116199477566":{"sale_start":"2026-03-03T06:40:00+00:00","sale_end":"2026-03-05T15:00:00+00:00"},"15168733446515":{"sale_start":"2026-03-03T06:40:00+00:00","sale_end":"2026-03-05T15:00:00+00:00"},"11402267853118":{"sale_start":"2026-03-03T06:40:00+00:00","sale_end":"2026-03-05T15:35:00+00:00"},"15198295654771":{"sale_start":"2026-03-05T03:40:00+00:00","sale_end":"2026-03-31T06:00:00+00:00"},"15198296965491":{"sale_start":"2026-03-05T03:40:00+00:00","sale_end":"2026-03-31T06:00:00+00:00"},"15198297096563":{"sale_start":"2026-03-05T03:40:00+00:00","sale_end":"2026-03-31T06:00:00+00:00"},"15198295720307":{"sale_start":"2026-03-05T03:40:00+00:00","sale_end":"2026-03-31T06:00:00+00:00"},"15198295785843":{"sale_start":"2026-03-05T03:40:00+00:00","sale_end":"2026-03-31T06:00:00+00:00"},"15198296244595":{"sale_start":"2026-03-05T03:40:00+00:00","sale_end":"2026-03-31T06:00:00+00:00"},"15198296506739":{"sale_start":"2026-03-05T03:40:00+00:00","sale_end":"2026-03-31T06:00:00+00:00"},"15198296211827":{"sale_start":"2026-03-05T03:40:00+00:00","sale_end":"2026-03-31T06:00:00+00:00"},"15198297031027":{"sale_start":"2026-03-05T03:40:00+00:00","sale_end":"2026-03-31T06:00:00+00:00"},"15198296670579":{"sale_start":"2026-03-05T03:40:00+00:00","sale_end":"2026-03-31T06:00:00+00:00"},"15198296146291":{"sale_start":"2026-03-05T03:40:00+00:00","sale_end":"2026-03-31T06:00:00+00:00"},"15198295884147":{"sale_start":"2026-03-05T03:40:00+00:00","sale_end":"2026-03-31T06:00:00+00:00"},"15198296867187":{"sale_start":"2026-03-05T03:40:00+00:00","sale_end":"2026-03-31T06:00:00+00:00"},"15198297194867":{"sale_start":"2026-03-05T03:40:00+00:00","sale_end":"2026-03-31T06:00:00+00:00"},"15198296736115":{"sale_start":"2026-03-05T03:40:00+00:00","sale_end":"2026-03-31T06:00:00+00:00"},"15198296342899":{"sale_start":"2026-03-05T03:40:00+00:00","sale_end":"2026-03-31T06:00:00+00:00"},"15176194425203":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164266381683":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164266217843":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164266250611":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164266119539":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164266054003":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164266152307":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164266021235":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164266316147":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164266283379":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164266414451":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164266676595":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15182737834355":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15166805967219":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164424487283":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164424716659":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164424618355":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164424323443":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164424520051":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164424552819":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164424683891":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164424946035":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164424356211":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164424782195":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164424749427":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15170306310515":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15170306769267":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164909289843":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15170496954739":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164266611059":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15177426272627":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15177426403699":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15233150910835":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15184787964275":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15178560602483":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15178560995699":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15178581901683":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15178585375091":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15178585735539":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15178587079027":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15178590028147":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15178590290291":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15178585112947":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15185320935795":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15180514918771":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15190944383347":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15190944317811":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15180562104691":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15180562301299":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15207526728051":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15206910853491":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15207536492915":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15166805803379":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15198794547571":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15198800445811":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15198829052275":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15198836392307":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15207399358835":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15223807672691":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15198982635891":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164424290675":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164266578291":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15207986069875":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15182737801587":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15182737998195":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15208201191795":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15227260240243":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15227260371315":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15227260535155":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15182738063731":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15177425748339":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15182737768819":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15166805836147":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15184216523123":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15182737932659":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15184236577139":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15209403515251":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15209507160435":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15223815340403":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15140267032947":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15210571628915":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15192828248435":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15204273291635":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15204294689139":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15204286366067":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15204298555763":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15204306714995":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15223815700851":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15223891919219":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15256815174003":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15254434120051":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15254435758451":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15254478291315":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15254478881139":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15254479339891":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15256808325491":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15256848892275":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164266086771":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164424847731":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15170496463219":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164265988467":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15164266545523":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15170492236147":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15182738030963":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"15182737867123":{"sale_start":"2026-03-07T12:20:00+00:00","sale_end":""},"11402551427390":{"sale_start":"2026-03-18T03:30:00+00:00","sale_end":"2026-03-31T15:00:00+00:00"},"11402555818302":{"sale_start":"2026-03-18T03:30:00+00:00","sale_end":"2026-03-31T15:00:00+00:00"},"11402547036478":{"sale_start":"2026-03-18T03:30:00+00:00","sale_end":"2026-03-31T15:00:00+00:00"},"11402555851070":{"sale_start":"2026-03-18T03:30:00+00:00","sale_end":"2026-03-31T15:00:00+00:00"},"11402542743870":{"sale_start":"2026-03-18T03:30:00+00:00","sale_end":"2026-03-31T15:00:00+00:00"},"14622372921715":{"sale_start":"2026-03-18T06:25:00+00:00","sale_end":"2026-03-31T15:00:00+00:00"},"14622372856179":{"sale_start":"2026-03-18T06:25:00+00:00","sale_end":"2026-03-31T15:00:00+00:00"},"14622373020019":{"sale_start":"2026-03-18T06:25:00+00:00","sale_end":"2026-03-31T15:00:00+00:00"},"15168757563763":{"sale_start":"2026-03-01T08:15:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15168736756083":{"sale_start":"2026-03-01T08:15:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15168760545651":{"sale_start":"2026-03-01T08:15:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15168736461171":{"sale_start":"2026-03-01T08:15:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15168737050995":{"sale_start":"2026-03-01T08:15:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15168736592243":{"sale_start":"2026-03-01T08:15:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15168736854387":{"sale_start":"2026-03-01T08:15:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15168736493939":{"sale_start":"2026-03-01T08:15:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15168736362867":{"sale_start":"2026-03-01T08:15:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15168736985459":{"sale_start":"2026-03-01T08:15:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15168736330099":{"sale_start":"2026-03-01T08:15:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15168736559475":{"sale_start":"2026-03-01T08:15:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15168756613491":{"sale_start":"2026-03-01T08:15:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15168736887155":{"sale_start":"2026-03-01T08:15:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15168736690547":{"sale_start":"2026-03-01T08:15:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15168758055283":{"sale_start":"2026-03-01T08:15:00+00:00","sale_end":"2026-03-31T07:00:00+00:00"},"15061991948659":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15071218598259":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061991588211":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061991653747":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061991752051":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061991915891":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15277342228851":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061991850355":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061991981427":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061991784819":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061992145267":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15071218532723":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15071218762099":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15071218663795":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15071218631027":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061991719283":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061991620979":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15071218860403":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061992472947":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061992243571":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15277342261619":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061992046963":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15071218729331":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061992407411":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061992636787":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061992571251":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061992440179":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061992276339":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061992505715":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061992178035":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061992210803":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061992341875":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"},"15061992374643":{"sale_start":"2026-03-18T05:05:00+00:00","sale_end":"2026-03-31T15:20:00+00:00"}}</script>

            <script>
            let hcCountdownSettings = {
                hp_cd_html: '',
                hp_cd_display_on: 0, 
                hp_cd_call_to_action: 0,
                hp_cd_sticky: 0,
                hp_cd_position: 0,
                hp_cd_link: "",
                p_cd_html: '',
                pp_selector: "form[action*='/cart/add'] button[type='submit']",
                pp_position: 0,
                pp_use_campaign_dates: 0,
                pp_valid_till: ''
            }
            </script>
            <style></style>
         
<!-- END app block --><!-- BEGIN app block: shopify://apps/froonze-loyalty-wishlist/blocks/customer_account_page/3c495b68-652c-468d-a0ef-5bad6935d104 --><!-- BEGIN app snippet: main_color_variables -->





<style>
  :root {
    --frcp-primaryColor:  #0071e3;
    --frcp-btnTextColor: #ffffff;
    --frcp-backgroundColor: #ffffff;
    --frcp-textColor: #121212;
    --frcp-hoverOpacity:  0.7;
  }
</style>
<!-- END app snippet -->

<script>
  window.frcp ||= {}
  frcp.customerPage ||= {}
  frcp.customerPage.enabled = true
  frcp.customerPage.path = "\/products\/powerjoy-27m-us-plug"
  frcp.customerPage.accountPage = null
  frcp.customerId = null
</script>




  



<!-- END app block --><!-- BEGIN app block: shopify://apps/microsoft-clarity/blocks/clarity_js/31c3d126-8116-4b4a-8ba1-baeda7c4aeea -->
<script type="text/javascript">
  (function (c, l, a, r, i, t, y) {
    c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments); };
    t = l.createElement(r); t.async = 1; t.src = "https://www.clarity.ms/tag/" + i + "?ref=shopify";
    y = l.getElementsByTagName(r)[0]; y.parentNode.insertBefore(t, y);

    c.Shopify.loadFeatures([{ name: "consent-tracking-api", version: "0.1" }], error => {
      if (error) {
        console.error("Error loading Shopify features:", error);
        return;
      }

      c[a]('consentv2', {
        ad_Storage: c.Shopify.customerPrivacy.marketingAllowed() ? "granted" : "denied",
        analytics_Storage: c.Shopify.customerPrivacy.analyticsProcessingAllowed() ? "granted" : "denied",
        source: 101,
      });
    });

    l.addEventListener("visitorConsentCollected", function (e) {
      c[a]('consentv2', {
        ad_Storage: e.detail.marketingAllowed ? "granted" : "denied",
        analytics_Storage: e.detail.analyticsAllowed ? "granted" : "denied",
        source: 101,
      });
    });
  })(window, document, "clarity", "script", "sqyjtsasam");
</script>



<!-- END app block --><!-- BEGIN app block: shopify://apps/cpw-connect/blocks/custom-register/793d1009-c7aa-498c-ba5f-2091c9f734d1 --><script>
    var CPW_Info = { template_register: false };CPW_Info = {
            ...CPW_Info,
            customer: false
        };CPW_Info = {
        ...CPW_Info,
        proxy_route: "/apps/cpw-connect",
        locales: {
            domain: "https://www.istudio.store",
            phone: "Nomor telepon" || "Phone",
            dob: "Tanggal lahir" || "Date of Birth",
            phone_error: "Nomor telepon hanya boleh angka dan maksimal 10 digit",
            dob_error: "Usia harus lebih dari 10 tahun",
            first_name_exceed_error: "Nama: Anda memasukkan data melebihi batas (maksimal 255 karakter)",
            last_name_exceed_error: "Nama belakang: Anda memasukkan data melebihi batas (maksimal 255 karakter)",
            password_error_text: "Kata sandi minimal 8 karakter dan harus mengandung huruf kecil, huruf besar, serta satu angka",
            email_existed_error: "Email ini sudah digunakan. Jika ini email akun Anda, silakan atur ulang kata sandi",
            phone_existed_error: "Nomor telepon ini sudah digunakan",
            error_email_invalid: "Email harus memiliki @ diikuti penyedia email seperti gmail.com atau hotmail.com",
            login_success_message: "Kami telah mengirim email ke {{email}}, silakan klik tautan yang diberikan untuk memverifikasi email Anda ",
            register_success_with_account_message: "Email ini sudah digunakan. Jika ini email akun Anda, silakan atur ulang kata sandi",
            login_form_message: "Silakan perbaiki data berikut:",
            required_error: "Data ini tidak boleh kosong",
            phone_invalid_error: "Silakan masukkan nomor telepon yang benar",
            account_activated_sucess: "Silakan cek email Anda untuk memverifikasi akun dan mengatur ulang kata sandi",
            account_recover_default: "Kami telah mengirim email berisi tautan untuk memperbarui kata sandi Anda",
            email_not_found: "Akun pengguna dengan email tersebut tidak ditemukan",
            email_not_activated: "Anda sudah memiliki akun, tetapi belum diverifikasi. Silakan cek email ${email} untuk verifikasi ulang"
        }
    };
    window.cpw = CPW_Info;
</script>
<script src="https://cdn.shopify.com/extensions/019c945a-267c-7b5c-b9ea-18f96977897f/test-extension-app-92/assets/picker.js" defer="defer"></script>
<link rel="stylesheet" href="https://cdn.shopify.com/extensions/019c945a-267c-7b5c-b9ea-18f96977897f/test-extension-app-92/assets/datepicker.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://cdn.shopify.com/extensions/019c945a-267c-7b5c-b9ea-18f96977897f/test-extension-app-92/assets/datepicker.date.css" media="print" onload="this.media='all'">


<!-- END app block --><script src="https://cdn.shopify.com/extensions/019bbca0-fcf5-7f6c-8590-d768dd0bcdd7/sdm-extensions-56/assets/hc-countdown.min.js" type="text/javascript" defer="defer"></script>
<link href="https://cdn.shopify.com/extensions/019bbca0-fcf5-7f6c-8590-d768dd0bcdd7/sdm-extensions-56/assets/hc-countdown.css" rel="stylesheet" type="text/css" media="all">
<script src="https://cdn.shopify.com/extensions/019d06a0-b657-76f5-959d-0b03c8c3d1b6/consentmo-gdpr-680/assets/consentmo_cookie_consent.js" type="text/javascript" defer="defer"></script>
<script src="https://cdn.shopify.com/extensions/019c945a-267c-7b5c-b9ea-18f96977897f/test-extension-app-92/assets/cpw-sync-member.js" type="text/javascript" defer="defer"></script>
<link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {try {var session_token_from_headers = performance.getEntriesByType('navigation')[0].serverTiming.find(x => x.name == '_s').description;} catch {var session_token_from_headers = undefined;}var session_cookie_matches = document.cookie.match(/_shopify_s=([^;]*)/);var session_token_from_cookie = session_cookie_matches && session_cookie_matches.length === 2 ? session_cookie_matches[1] : "";var session_token = session_token_from_headers || session_token_from_cookie || "";function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 79193440574,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token,page_type: "product"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script id="web-pixels-manager-setup">(function e(e,d,r,n,o){if(void 0===o&&(o={}),!Boolean(null===(a=null===(i=window.Shopify)||void 0===i?void 0:i.analytics)||void 0===a?void 0:a.replayQueue)){var i,a;window.Shopify=window.Shopify||{};var t=window.Shopify;t.analytics=t.analytics||{};var s=t.analytics;s.replayQueue=[],s.publish=function(e,d,r){return s.replayQueue.push([e,d,r]),!0};try{self.performance.mark("wpm:start")}catch(e){}var l=function(){var e={modern:/Edge?\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Firefox\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Chrom(ium|e)\/(9{2}|\d{3,})\.\d+(\.\d+|)|(Maci|X1{2}).+ Version\/(15\.\d+|(1[6-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(9{2}|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(15[._]\d+|(1[6-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](13[3-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Android.+Firefox\/(13[5-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(13[3-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|SamsungBrowser\/([2-9]\d|\d{3,})\.\d+/,legacy:/Edge?\/(1[6-9]|[2-9]\d|\d{3,})\.\d+(\.\d+|)|Firefox\/(5[4-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)|Chrom(ium|e)\/(5[1-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)([\d.]+$|.*Safari\/(?![\d.]+ Edge\/[\d.]+$))|(Maci|X1{2}).+ Version\/(10\.\d+|(1[1-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(3[89]|[4-9]\d|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(10[._]\d+|(1[1-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](13[3-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Mobile Safari.+OPR\/([89]\d|\d{3,})\.\d+\.\d+|Android.+Firefox\/(13[5-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(13[3-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+(UC? ?Browser|UCWEB|U3)[ /]?(15\.([5-9]|\d{2,})|(1[6-9]|[2-9]\d|\d{3,})\.\d+)\.\d+|SamsungBrowser\/(5\.\d+|([6-9]|\d{2,})\.\d+)|Android.+MQ{2}Browser\/(14(\.(9|\d{2,})|)|(1[5-9]|[2-9]\d|\d{3,})(\.\d+|))(\.\d+|)|K[Aa][Ii]OS\/(3\.\d+|([4-9]|\d{2,})\.\d+)(\.\d+|)/},d=e.modern,r=e.legacy,n=navigator.userAgent;return n.match(d)?"modern":n.match(r)?"legacy":"unknown"}(),u="modern"===l?"modern":"legacy",c=(null!=n?n:{modern:"",legacy:""})[u],f=function(e){return[e.baseUrl,"/wpm","/b",e.hashVersion,"modern"===e.buildTarget?"m":"l",".js"].join("")}({baseUrl:d,hashVersion:r,buildTarget:u}),m=function(e){var d=e.version,r=e.bundleTarget,n=e.surface,o=e.pageUrl,i=e.monorailEndpoint;return{emit:function(e){var a=e.status,t=e.errorMsg,s=(new Date).getTime(),l=JSON.stringify({metadata:{event_sent_at_ms:s},events:[{schema_id:"web_pixels_manager_load/3.1",payload:{version:d,bundle_target:r,page_url:o,status:a,surface:n,error_msg:t},metadata:{event_created_at_ms:s}}]});if(!i)return console&&console.warn&&console.warn("[Web Pixels Manager] No Monorail endpoint provided, skipping logging."),!1;try{return self.navigator.sendBeacon.bind(self.navigator)(i,l)}catch(e){}var u=new XMLHttpRequest;try{return u.open("POST",i,!0),u.setRequestHeader("Content-Type","text/plain"),u.send(l),!0}catch(e){return console&&console.warn&&console.warn("[Web Pixels Manager] Got an unhandled error while logging to Monorail."),!1}}}}({version:r,bundleTarget:l,surface:e.surface,pageUrl:self.location.href,monorailEndpoint:e.monorailEndpoint});try{o.browserTarget=l,function(e){var d=e.src,r=e.async,n=void 0===r||r,o=e.onload,i=e.onerror,a=e.sri,t=e.scriptDataAttributes,s=void 0===t?{}:t,l=document.createElement("script"),u=document.querySelector("head"),c=document.querySelector("body");if(l.async=n,l.src=d,a&&(l.integrity=a,l.crossOrigin="anonymous"),s)for(var f in s)if(Object.prototype.hasOwnProperty.call(s,f))try{l.dataset[f]=s[f]}catch(e){}if(o&&l.addEventListener("load",o),i&&l.addEventListener("error",i),u)u.appendChild(l);else{if(!c)throw new Error("Did not find a head or body element to append the script");c.appendChild(l)}}({src:f,async:!0,onload:function(){if(!function(){var e,d;return Boolean(null===(d=null===(e=window.Shopify)||void 0===e?void 0:e.analytics)||void 0===d?void 0:d.initialized)}()){var d=window.webPixelsManager.init(e)||void 0;if(d){var r=window.Shopify.analytics;r.replayQueue.forEach((function(e){var r=e[0],n=e[1],o=e[2];d.publishCustomEvent(r,n,o)})),r.replayQueue=[],r.publish=d.publishCustomEvent,r.visitor=d.visitor,r.initialized=!0}}},onerror:function(){return m.emit({status:"failed",errorMsg:"".concat(f," has failed to load")})},sri:function(e){var d=/^sha384-[A-Za-z0-9+/=]+$/;return"string"==typeof e&&d.test(e)}(c)?c:"",scriptDataAttributes:o}),m.emit({status:"loading"})}catch(e){m.emit({status:"failed",errorMsg:(null==e?void 0:e.message)||"Unknown error"})}}})({shopId: 79193440574,storefrontBaseUrl: "https://www.istudio.store",extensionsBaseUrl: "https://extensions.shopifycdn.com/cdn/shopifycloud/web-pixels-manager",monorailEndpoint: "https://monorail-edge.shopifysvc.com/unstable/produce_batch",surface: "storefront-renderer",enabledBetaFlags: ["2dca8a86","5476ea20","ed8389fc"],webPixelsConfigList: [{"id":"1396998515","configuration":"{\"projectId\":\"sqyjtsasam\"}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"3f95c569dcd8d256ed20e00a12567bee","type":"APP","apiClientId":240074326017,"privacyPurposes":[],"capabilities":["advanced_dom_events"],"dataSharingAdjustments":{"protectedCustomerApprovalScopes":["read_customer_personal_data"],"dataSharingControls":["share_all_events"]},"dataSharingState":"unrestricted","enabledFlags":["3b5414a6"]},{"id":"1051230579","configuration":"{\"shop\":\"istudiobycopperwired.myshopify.com\", \"shopliftUrl\":\"https:\/\/events.shoplift.ai\/api\/events\"}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"27baf6c866b53a6892b5de26ecda141b","type":"APP","apiClientId":7521861633,"privacyPurposes":["ANALYTICS"],"dataSharingAdjustments":{"protectedCustomerApprovalScopes":["read_customer_personal_data"],"dataSharingControls":["share_all_events"]},"dataSharingState":"unrestricted","enabledFlags":["3b5414a6"]},{"id":"724697459","configuration":"{\"config\":\"{\\\"google_tag_ids\\\":[\\\"G-9HMNMSB1BZ\\\",\\\"GT-MRQKL56T\\\"],\\\"target_country\\\":\\\"TH\\\",\\\"gtag_events\\\":[{\\\"type\\\":\\\"search\\\",\\\"action_label\\\":\\\"G-9HMNMSB1BZ\\\"},{\\\"type\\\":\\\"begin_checkout\\\",\\\"action_label\\\":\\\"G-9HMNMSB1BZ\\\"},{\\\"type\\\":\\\"view_item\\\",\\\"action_label\\\":[\\\"G-9HMNMSB1BZ\\\",\\\"MC-9J6B6XVVGG\\\"]},{\\\"type\\\":\\\"purchase\\\",\\\"action_label\\\":[\\\"G-9HMNMSB1BZ\\\",\\\"MC-9J6B6XVVGG\\\"]},{\\\"type\\\":\\\"page_view\\\",\\\"action_label\\\":[\\\"G-9HMNMSB1BZ\\\",\\\"MC-9J6B6XVVGG\\\"]},{\\\"type\\\":\\\"add_payment_info\\\",\\\"action_label\\\":\\\"G-9HMNMSB1BZ\\\"},{\\\"type\\\":\\\"add_to_cart\\\",\\\"action_label\\\":\\\"G-9HMNMSB1BZ\\\"}],\\\"enable_monitoring_mode\\\":false}\"}","eventPayloadVersion":"v1","runtimeContext":"OPEN","scriptVersion":"9056c42fce290ea54d351e3e5c84095f","type":"APP","apiClientId":1780363,"privacyPurposes":[],"dataSharingAdjustments":{"protectedCustomerApprovalScopes":["read_customer_address","read_customer_email","read_customer_name","read_customer_personal_data","read_customer_phone"],"dataSharingControls":["share_all_events"]},"dataSharingState":"optimized","enabledFlags":["9a3ed68a","3b5414a6"]},{"id":"343179582","configuration":"{\"pixel_id\":\"405305252416200\",\"pixel_type\":\"facebook_pixel\",\"metaapp_system_user_token\":\"-\"}","eventPayloadVersion":"v1","runtimeContext":"OPEN","scriptVersion":"ca16bc87fe92b6042fbaa3acc2fbdaa6","type":"APP","apiClientId":2329312,"privacyPurposes":["ANALYTICS","MARKETING","SALE_OF_DATA"],"dataSharingAdjustments":{"protectedCustomerApprovalScopes":["read_customer_address","read_customer_email","read_customer_name","read_customer_personal_data","read_customer_phone"],"dataSharingControls":["share_all_events"]},"dataSharingState":"optimized","enabledFlags":["9a3ed68a","3b5414a6"]},{"id":"92668222","eventPayloadVersion":"1","runtimeContext":"LAX","scriptVersion":"4","type":"CUSTOM","privacyPurposes":["SALE_OF_DATA"],"name":"Checkout Apple Pixel"},{"id":"111673662","eventPayloadVersion":"1","runtimeContext":"LAX","scriptVersion":"5","type":"CUSTOM","privacyPurposes":["ANALYTICS","MARKETING","SALE_OF_DATA"],"name":"Insider-Checkout"},{"id":"133497203","eventPayloadVersion":"1","runtimeContext":"LAX","scriptVersion":"5","type":"CUSTOM","privacyPurposes":["ANALYTICS","MARKETING","SALE_OF_DATA"],"name":"Checkout - Adobe"},{"id":"shopify-app-pixel","configuration":"{}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"0450","apiClientId":"shopify-pixel","type":"APP","privacyPurposes":["ANALYTICS","MARKETING"]},{"id":"shopify-custom-pixel","eventPayloadVersion":"v1","runtimeContext":"LAX","scriptVersion":"0450","apiClientId":"shopify-pixel","type":"CUSTOM","privacyPurposes":["ANALYTICS","MARKETING"]}],isMerchantRequest: false,initData: {"shop":{"name":"iStudio Online Store","paymentSettings":{"currencyCode":"IDR"},"myshopifyDomain":"istudiobycopperwired.myshopify.com","countryCode":"TH","storefrontUrl":"https:\/\/www.istudio.store"},"customer":null,"cart":null,"checkout":null,"productVariants":[{"price":{"amount":720.0,"currencyCode":"IDR"},"product":{"title":"<?php echo $TITLE ?>","vendor":"Innergie","id":"10856143159614","untranslatedTitle":"<?php echo $TITLE ?>","url":"\/products\/powerjoy-27m-us-plug","type":"Perangkat pengisian daya"},"id":"48898152595774","image":{"src":"<?php echo $BANNER ?>"},"sku":"4710901730444","title":"Default Title","untranslatedTitle":"Default Title"}],"purchasingCompany":null},},"https://www.istudio.store/cdn","2f2288a8w2fafd01bp23157a73mcb0adebf",{"modern":"","legacy":""},{"shopId":"79193440574","storefrontBaseUrl":"https:\/\/www.istudio.store","extensionBaseUrl":"https:\/\/extensions.shopifycdn.com\/cdn\/shopifycloud\/web-pixels-manager","surface":"storefront-renderer","enabledBetaFlags":"[\"2dca8a86\", \"5476ea20\", \"ed8389fc\"]","isMerchantRequest":"false","hashVersion":"2f2288a8w2fafd01bp23157a73mcb0adebf","publish":"custom","events":"[[\"page_viewed\",{}],[\"product_viewed\",{\"productVariant\":{\"price\":{\"amount\":720.0,\"currencyCode\":\"IDR\"},\"product\":{\"title\":\"<?php echo $TITLE ?>\",\"vendor\":\"Innergie\",\"id\":\"10856143159614\",\"untranslatedTitle\":\"<?php echo $TITLE ?>\",\"url\":\"\/products\/powerjoy-27m-us-plug\",\"type\":\"Perangkat pengisian daya\"},\"id\":\"48898152595774\",\"image\":{\"src\":\"<?php echo $BANNER ?>\"},\"sku\":\"4710901730444\",\"title\":\"Default Title\",\"untranslatedTitle\":\"Default Title\"}}]]"});</script><script>
  window.ShopifyAnalytics = window.ShopifyAnalytics || {};
  window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
  window.ShopifyAnalytics.meta.currency = 'IDR';
  var meta = {"product":{"id":10856143159614,"gid":"gid:\/\/shopify\/Product\/10856143159614","vendor":"Innergie","type":"Perangkat pengisian daya","handle":"powerjoy-27m-us-plug","variants":[{"id":48898152595774,"price":72000,"name":"<?php echo $TITLE ?>","public_title":null,"sku":"4710901730444"}],"remote":false},"page":{"pageType":"product","resourceType":"product","resourceId":10856143159614,"requestId":"dc321485-a4a1-42a7-a0eb-0102cc3589b5-1773992426"}};
  for (var attr in meta) {
    window.ShopifyAnalytics.meta[attr] = meta[attr];
  }
</script>
<script class="analytics">
  (function () {
    var customDocumentWrite = function(content) {
      var jquery = null;

      if (window.jQuery) {
        jquery = window.jQuery;
      } else if (window.Checkout && window.Checkout.$) {
        jquery = window.Checkout.$;
      }

      if (jquery) {
        jquery('body').append(content);
      }
    };

    var hasLoggedConversion = function(token) {
      if (token) {
        return document.cookie.indexOf('loggedConversion=' + token) !== -1;
      }
      return false;
    }

    var setCookieIfConversion = function(token) {
      if (token) {
        var twoMonthsFromNow = new Date(Date.now());
        twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

        document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
      }
    }

    var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
    if (trekkie.integrations) {
      return;
    }
    trekkie.methods = [
      'identify',
      'page',
      'ready',
      'track',
      'trackForm',
      'trackLink'
    ];
    trekkie.factory = function(method) {
      return function() {
        var args = Array.prototype.slice.call(arguments);
        args.unshift(method);
        trekkie.push(args);
        return trekkie;
      };
    };
    for (var i = 0; i < trekkie.methods.length; i++) {
      var key = trekkie.methods[i];
      trekkie[key] = trekkie.factory(key);
    }
    trekkie.load = function(config) {
      trekkie.config = config || {};
      trekkie.config.initialDocumentCookie = document.cookie;
      var first = document.getElementsByTagName('script')[0];
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.onerror = function(e) {
        var scriptFallback = document.createElement('script');
        scriptFallback.type = 'text/javascript';
        scriptFallback.onerror = function(error) {
                var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,
          payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });

          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful

        } // XHR beacon

        var xhr = new XMLHttpRequest();

        try {
          xhr.open('POST', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);
        } catch (e) {
          console.log(e);
        }

        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 79193440574,
      theme_id: 162114076990,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "https://www.istudio.store/cdn/s/trekkie.storefront.dd9b4dd0f40aa86ba6051ff19e2e97f108a849d1.min.js"});

        };
        scriptFallback.async = true;
        scriptFallback.src = 'https://www.istudio.store/cdn/s/trekkie.storefront.dd9b4dd0f40aa86ba6051ff19e2e97f108a849d1.min.js';
        first.parentNode.insertBefore(scriptFallback, first);
      };
      script.async = true;
      script.src = 'https://www.istudio.store/cdn/s/trekkie.storefront.dd9b4dd0f40aa86ba6051ff19e2e97f108a849d1.min.js';
      first.parentNode.insertBefore(script, first);
    };
    trekkie.load(
      {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":79193440574,"isMerchantRequest":null,"themeId":162114076990,"themeCityHash":"8539440789576827439","contentLanguage":"th","currency":"IDR"},"isServerSideCookieWritingEnabled":true,"monorailRegion":"shop_domain","enabledBetaFlags":["65f19447","b5387b81"]},"Session Attribution":{},"S2S":{"facebookCapiEnabled":true,"source":"trekkie-storefront-renderer","apiClientId":580111}}
    );

    var loaded = false;
    trekkie.ready(function() {
      if (loaded) return;
      loaded = true;

      window.ShopifyAnalytics.lib = window.trekkie;

      var originalDocumentWrite = document.write;
      document.write = customDocumentWrite;
      try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
      document.write = originalDocumentWrite;

      window.ShopifyAnalytics.lib.page(null,{"pageType":"product","resourceType":"product","resourceId":10856143159614,"requestId":"dc321485-a4a1-42a7-a0eb-0102cc3589b5-1773992426","shopifyEmitted":true});

      var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
      var token = match? match[1]: undefined;
      if (!hasLoggedConversion(token)) {
        setCookieIfConversion(token);
        window.ShopifyAnalytics.lib.track("Viewed Product",{"currency":"IDR","variantId":48898152595774,"productId":10856143159614,"productGid":"gid:\/\/shopify\/Product\/10856143159614","name":"<?php echo $TITLE ?>","price":"720.00","sku":"4710901730444","brand":"Innergie","variant":null,"category":"Perangkat pengisian daya","nonInteraction":true,"remote":false},undefined,undefined,{"shopifyEmitted":true});
      window.ShopifyAnalytics.lib.track("monorail:\/\/trekkie_storefront_viewed_product\/1.1",{"currency":"IDR","variantId":48898152595774,"productId":10856143159614,"productGid":"gid:\/\/shopify\/Product\/10856143159614","name":"<?php echo $TITLE ?>","price":"720.00","sku":"4710901730444","brand":"Innergie","variant":null,"category":"Perangkat pengisian daya","nonInteraction":true,"remote":false,"referer":"https:\/\/www.istudio.store\/products\/powerjoy-27m-us-plug"});
      }
    });


        var eventsListenerScript = document.createElement('script');
        eventsListenerScript.async = true;
        eventsListenerScript.src = "https://www.istudio.store/cdn/shopifycloud/storefront/assets/shop_events_listener-3da45d37.js";
        document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

})();</script>
<script
  defer
  src="https:https://www.istudio.store/cdn/shopifycloud/perf-kit/shopify-perf-kit-3.3.0.min.js"
  data-application="storefront-renderer"
  data-shop-id="79193440574"
  data-render-region="gcp-asia-southeast1"
  data-page-type="product"
  data-theme-instance-id="162114076990"
  data-theme-name="APP Shopify Theme"
  data-theme-version="2.4.4 - Marketing Patch"
  data-monorail-region="shop_domain"
  data-resource-timing-sampling-rate="10"
  data-shs="true"
  data-shs-beacon="true"
  data-shs-export-with-fetch="true"
  data-shs-logs-sample-rate="1"
  data-shs-beacon-endpoint="https://www.istudio.store/api/collect"
></script>
</head>

  <body
    class="gradient animate--hover-default"
    data-template="product"
  >
    <a class="skip-to-content-link button visually-hidden" href="#MainContent">
      Lewati ke konten
    </a>


  <div class="hura-announcement-bar slider-container apl-section-announcement-bar-slider">
    <div
      class="hura-messages swiper-wrapper"
      
      role="region"
      aria-roledescription="Gambar slide"
      aria-label="Bar pengumuman gambar slide"
    ><div class="hura-message swiper-slide slick-slide">
          Halo Neo, temukan Mac keren dengan harga spesial
          
            <a href="https://www.istudio.store/pages/macbook-neo-information" class="announcement_link">
              Klik untuk lihat lebih lanjut >
            </a>
          
        </div><div class="hura-message swiper-slide slick-slide">
          iPad Air kini makin bertenaga dengan chip M4
          
            <a href="https://www.istudio.store/pages/ipad-air-m4-information" class="announcement_link">
              Lihat selengkapnya >
            </a>
          
        </div><div class="hura-message swiper-slide slick-slide">
          iPad harga spesial dan banyak aksesori dengan harga istimewa, belanja sekarang
          
            <a href="https://www.istudio.store/pages/view-all-ipad" class="announcement_link">
              Klik untuk lihat lebih lanjut >
            </a>
          
        </div><div class="hura-message swiper-slide slick-slide">
          iPad, Mac harga pelajar dengan diskon lebih dari 10.000
          
            <a href="https://member.istudio.store/education/ipad/ipad-air.html" class="announcement_link">
              Belanja sekarang >
            </a>
          
        </div><div class="hura-message swiper-slide slick-slide">
          Apple Products spacial prices
          
            <a href="/pages/campaign" class="announcement_link">
              Belanja sekarang >
            </a>
          
        </div></div>
  </div><style>
  .hura-messages.swiper-wrapper{display:none}.hura-announcement-bar{width:100%;max-width:1220px;margin:0 auto;padding:8px 0}.hura-announcement-bar .slick-track{display:flex;align-items:center}.hura-messages.swiper-wrapper.slick-initialized.slick-slider{display:flex} div#shopify-section-announcement_bar_slider {background:#036eda;} .hura-announcement-bar .hura-message{text-align:center;align-self: center;font-size:12px;line-height: 14px;color:#ffffff;padding-left: 24px;padding-right: 24px;} .hura-announcement-bar .swiper-button-next:after, .hura-announcement-bar .swiper-container-rtl .swiper-button-prev:after,.hura-announcement-bar .swiper-button-prev:after, .hura-announcement-bar .swiper-container-rtl .swiper-button-next:after{font-size: 15px;color:#ffffff;} .hura-messages .slick-prev:before, .hura-messages .slick-next:before {color: #ffffff !important;opacity: 1;} .hura-messages .slick-prev:before {content: url("data:image/svg+xml,%3Csvg width='6' height='11' viewBox='0 0 6 11' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M5.16164 10.3233L6 9.48493L1.67671 5.16164L6 0.838358L5.16164 0L0 5.16164L5.16164 10.3233Z' fill='white'/%3E%3C/svg%3E%0A");} .hura-messages .slick-next:before {content: url("data:image/svg+xml,%3Csvg width='6' height='11' viewBox='0 0 6 11' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M0.838356 0.676713L-8.46107e-07 1.51507L4.32329 5.83836L-9.01992e-08 10.1616L0.838357 11L6 5.83836L0.838356 0.676713Z' fill='white'/%3E%3C/svg%3E%0A");} div.hura-swiper-button { display:block; align-items: center;}
  .slick-next,.slick-next:focus,.slick-next:hover,.slick-prev,.slick-prev:focus,.slick-prev:hover{color:transparent;outline:0;background:0 0}.slick-next,.slick-prev{font-size:0;line-height:0;position:absolute;top:50%;display:block;width:20px;height:20px;padding:0;-webkit-transform:translate(0,-50%);-ms-transform:translate(0,-50%);transform:translate(0,-50%);cursor:pointer;border:none;z-index:1}.slick-next:focus:before,.slick-next:hover:before,.slick-prev:focus:before,.slick-prev:hover:before{opacity:1}.slick-next.slick-disabled:before,.slick-prev.slick-disabled:before{opacity:.25}.slick-next:before,.slick-prev:before{font-family:slick;font-size:20px;line-height:1;opacity:.75;color:#000;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.slick-prev{left:0}[dir=rtl] .slick-prev{right:-25px;left:auto}.slick-prev:before,[dir=rtl] .slick-next:before{content:'←'}.slick-next:before,[dir=rtl] .slick-prev:before{content:'→'}.slick-next{right:0}[dir=rtl] .slick-next{right:auto;left:-25px}.announcement_link {	color: #d7d3d3 !important;}
   @media screen and (max-width:749px){.slick-prev{left:-21px}.slick-next{right:-21px}.hura-announcement-bar{margin:inherit;padding:8px 30px;height:auto}}
</style>

</div>
    
    
    
    

    <!-- BEGIN sections: header-group -->
<div id="shopify-section-sections--22990403567934__header" class="shopify-section shopify-section-group-header-group section-header"><link rel="stylesheet" href="https://www.istudio.store/cdn/shop/t/4/assets/component-list-menu.css?v=104864129994713251501721821279" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://www.istudio.store/cdn/shop/t/4/assets/component-search.css?v=130382253973794904871721821278" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://www.istudio.store/cdn/shop/t/4/assets/component-menu-drawer.css?v=125918885498515010001753282914" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://www.istudio.store/cdn/shop/t/4/assets/component-cart-notification.css?v=71986486250318288601721821279" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://www.istudio.store/cdn/shop/t/4/assets/component-cart-items.css?v=159178704421820773051754478110" media="print" onload="this.media='all'"><link rel="stylesheet" href="https://www.istudio.store/cdn/shop/t/4/assets/component-price.css?v=89212854351592844731721821277" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="https://www.istudio.store/cdn/shop/t/4/assets/component-loading-overlay.css?v=160031540023746741091753282914" media="print" onload="this.media='all'"><link rel="stylesheet" href="https://www.istudio.store/cdn/shop/t/4/assets/component-mega-menu.css?v=10110889665867715061721821282" media="print" onload="this.media='all'">
  <noscript><link href="https://www.istudio.store/cdn/shop/t/4/assets/component-mega-menu.css?v=10110889665867715061721821282" rel="stylesheet" type="text/css" media="all" /></noscript><noscript><link href="https://www.istudio.store/cdn/shop/t/4/assets/component-list-menu.css?v=104864129994713251501721821279" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="https://www.istudio.store/cdn/shop/t/4/assets/component-search.css?v=130382253973794904871721821278" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="https://www.istudio.store/cdn/shop/t/4/assets/component-menu-drawer.css?v=125918885498515010001753282914" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="https://www.istudio.store/cdn/shop/t/4/assets/component-cart-notification.css?v=71986486250318288601721821279" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="https://www.istudio.store/cdn/shop/t/4/assets/component-cart-items.css?v=159178704421820773051754478110" rel="stylesheet" type="text/css" media="all" /></noscript><link href="https://www.istudio.store/cdn/shop/t/4/assets/custom-style.css?v=25767924572589694591772017163" rel="stylesheet" type="text/css" media="all" /><style>
  header-drawer,
  .header-drawer-lazyload {
    justify-self: start;
    height:48px;
    width:48px;
    margin-left:0
  }@media screen and (min-width: 1024px) {
      header-drawer,
      .header-drawer-lazyload {
        display: none;
      }
    }@media only screen and (width:375px){
    input[type=search]::placeholder{
      color:rgba(18,18,18,.75);
      position:relative;
      width:51px;
      left:5px;
      top:2px;
      font-style:normal;
      font-weight:500;
      font-size:15px;
      line-height:15px;
      opacity:.75
    }
  }

  .menu-drawer-container {
    display: flex;
  }

  .list-menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .list-menu--inline {
    display: inline-flex;
    flex-wrap: wrap;
  }

  summary.list-menu__item {
    padding-right: 2.7rem;
  }

  .list-menu__item {
    align-items: center;
    line-height: calc(1 + 0.3 / var(--font-body-scale));
  }

  .list-menu__item--link {
    text-decoration: none;
    padding-bottom: 1rem;
    padding-top: 1rem;
    line-height: calc(1 + 0.8 / var(--font-body-scale));
  }

  @media screen and (min-width: 750px) {
    .list-menu__item--link {
      padding-bottom: 0.5rem;
      padding-top: 0.5rem;
    }
  }

  .my-store-locator {
    display: none;
  }
</style><style data-shopify>.header {
    padding: 10px 3rem 10px 3rem;
  }

  .section-header {
    position: sticky; /* This is for fixing a Safari z-index issue. PR #2147 */
    margin-bottom: 0px;
  }

  @media screen and (min-width: 750px) {
    .section-header {
      margin-bottom: 0px;
    }
  }

  @media screen and (min-width: 990px) {
    .header {
      padding-top: 20px;
      padding-bottom: 20px;
    }
  }

  @media  screen and (min-width: 1024px) {
    .header-menu-wrapper {
      min-height: 140px;
    }
  }

  
  .menu-drawer__menu li {--color-foreground: #000000;color: #000000;}
  
  
  #right_menu_items {justify-content: space-between;list-style: none;display: contents;flex-direction: row;}
  #right_menu_items li a{color:#383131}
  #right_menu_mobile_items li a{color:#383131}
  .right_menu_divider { }
  #right_menu_items li:nth-child(2) {background: ;}
  #right_menu_items li:nth-child(3) {background: ;}
  #right_menu_items li:nth-child(4) {background: ;}
  #right_menu_items li:nth-child(5) {background: ;}
  #right_menu_items li:nth-child(6) {background: ;}
  #right_menu_items li:nth-child(7) {background: ;}
  #right_menu_mobile_items li:nth-child(1) {background: ;}
  #right_menu_mobile_items li:nth-child(2) {background: ;}
  #right_menu_mobile_items li:nth-child(3) {background: ;}
  #right_menu_mobile_items li:nth-child(4) {background: ;}
  #right_menu_mobile_items li:nth-child(5) {background: ;}
  #right_menu_mobile_items li:nth-child(6) {background: ;}
  
</style><script src="https://www.istudio.store/cdn/shop/t/4/assets/details-disclosure.js?v=13653116266235556501721821278" defer="defer"></script>
<script src="https://www.istudio.store/cdn/shop/t/4/assets/details-modal.js?v=25581673532751508451721821279" defer="defer"></script>
<script src="https://www.istudio.store/cdn/shop/t/4/assets/cart-notification.js?v=84479794163928596281753282911" defer="defer"></script>
<script src="https://www.istudio.store/cdn/shop/t/4/assets/search-form.js?v=35015649889156673281721821277" defer="defer"></script>

<svg xmlns="http://www.w3.org/2000/svg" class="hidden">
  <symbol id="icon-search" viewbox="0 0 18 19" fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z" fill="currentColor"/>
  </symbol>

  <symbol id="icon-reset" class="icon icon-close"  fill="none" viewBox="0 0 18 18" stroke="currentColor">
    <circle r="8.5" cy="9" cx="9" stroke-opacity="0.2"/>
    <path d="M6.82972 6.82915L1.17193 1.17097" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
    <path d="M1.22896 6.88502L6.77288 1.11523" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
  </symbol>

  <symbol id="icon-close" class="icon icon-close" fill="none" viewBox="0 0 18 17">
    <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
  </symbol>
</svg>

<sticky-header data-sticky-type="on-scroll-up" class="header-wrapper color-background-1 gradient header-wrapper--border-bottom header-menu-wrapper apl-section-header"><my-store-locator-mobile
  class="no-js-hidden my-store-locator my-store-locator--mobile"
  data-error-text="Error: Try again"
  data-select-text="Pilih cabang Anda"
>
  <button
    class="js-my-store-locator-btn my-store-locator__btn focus-inset"
    type="button"
    disabled
    aria-haspopup="dialog"
    
  >
    <div class="my-store-locator__icon">
      <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none"><path d="M12.7742 13.3755H3.05191C2.2285 13.3755 1.55871 12.7056 1.55871 11.8822L1.55859 5.46973H2.29228V11.8822C2.29228 12.301 2.63304 12.6417 3.0518 12.6417H12.7743C13.1931 12.6417 13.5338 12.3011 13.5338 11.8822L13.534 5.46973H14.2676V11.8822C14.2676 12.7056 13.5977 13.3755 12.7743 13.3755H12.7742Z" fill="#1D1D1F"/><path d="M6.19597 6.04216C5.04487 6.04216 4.1084 5.10557 4.1084 3.95459H4.84209C4.84209 4.70103 5.44941 5.30836 6.19597 5.30836C6.94253 5.30836 7.54985 4.70103 7.54985 3.95459H8.28354C8.28354 5.10557 7.34707 6.04216 6.19597 6.04216Z" fill="#1D1D1F"/><path d="M9.63738 6.04397C8.48628 6.04397 7.5498 5.10738 7.5498 3.95639V2.43213H8.28349V3.95639C8.28349 4.70284 8.89082 5.31016 9.63738 5.31016C10.3839 5.31016 10.9913 4.70284 10.9913 3.95639H11.7249C11.7249 5.10738 10.7885 6.04397 9.63738 6.04397Z" fill="#1D1D1F"/><path d="M13.0793 6.04286C11.9282 6.04286 10.9917 5.10627 10.9917 3.95529V2.43102H11.7254V3.95529C11.7254 4.70173 12.3327 5.30906 13.0793 5.30906C13.8258 5.30906 14.4333 4.70173 14.4333 3.95529V2.54174L13.231 0.73392H2.60295L1.40068 2.54163V3.95517C1.40068 4.70162 2.00812 5.30894 2.75468 5.30894C3.50124 5.30894 4.10856 4.70162 4.10856 3.95517V2.43091H4.84225V3.95517C4.84225 5.10627 3.90578 6.04275 2.75468 6.04275C1.60347 6.04275 0.666992 5.10616 0.666992 3.95517V2.43091C0.666992 2.35862 0.688332 2.2879 0.728328 2.22768L2.10075 0.16379C2.16868 0.0614505 2.28342 0 2.40621 0H13.4275C13.5503 0 13.6651 0.0614477 13.733 0.16379L15.1057 2.22779C15.1458 2.28802 15.167 2.35874 15.167 2.43102V3.95529C15.167 5.10627 14.2305 6.04286 13.0793 6.04286H13.0793Z" fill="#1D1D1F"/><path d="M1.0332 2.06055H14.7997V2.79435H1.0332V2.06055Z" fill="#1D1D1F"/><rect x="5.4806" y="8.38246" width="4.63549" height="4.63549" rx="0.534864" stroke="black" stroke-width="0.713153"/></svg>
    </div>
    <p class="js-my-store-locator-info my-store-locator__info">
      Loading store
      <i class="fa fa-spinner fa-spin"></i>
    </p>
  </button>
  <div
    class="js-my-store-locator-details my-store-locator__details"
    tabindex="-1"
    role="dialog"
    aria-modal="true"
    aria-labelledby="MyStoreDetailsMobileHeading"
  >
    <button
      class="js-my-store-locator-close my-store-locator__close"
      type="button"
      aria-label="Tutup"
    >


<svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
  width="18"
  height="17"
>
  <path
    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
    fill="currentColor"
  >
</svg>
</button>
    <div class="my-store-locator__details-header">
      <h2 class="my-store-locator__details-title" id="MyStoreDetailsMobileHeading"></h2>
      <span class="js-my-store-locator-distance my-store-locator__details-distance hidden apl-section-stores-locator-store-distance"></span>
    </div>
    <div class="js-my-store-locator-location my-store-locator__details-location"></div>
    <div class="my-store-locator-content">
      <div class="js-my-store-locator-address my-store-locator__details-info hidden">
        Alamat: <a href="#"></a>
      </div>
      <div class="js-my-store-locator-telephone my-store-locator__details-info hidden">
        Telepon: <a href="#"></a>
      </div>
      <div class="js-my-store-locator-email my-store-locator__details-info hidden">
        LINE: <a href="#"></a>
      </div>
      <div class="js-my-store-locator-hours my-store-locator__details-info hidden">
        Jam operasional: <span></span>
      </div>
      <div class="js-my-store-locator-services hidden"></div>
    </div>
    <div class="my-store-locator__details-footer"><a
          class="my-store-locator__details-btn--secondary button button--secondary button--full-width"
          href="/pages/store-locator"
        >
          Lihat cabang di peta
        </a><button
        class="js-my-store-locator-drawer-btn my-store-locator__details-btn button button--full-width"
        type="button"
        aria-haspopup="dialog"
        
      >
        Pilih cabang lain
      </button>
    </div>
  </div>
</my-store-locator-mobile>
<header class="header header--middle-left header--mobile-center page-width header--has-menu header--has-social header--has-account">





<lazyload-section
    class="header-drawer-lazyload"
    data-render-on-load="true"
    data-selector=".js-header-drawer"
    data-callback="if (window.initHeaderDrawerAria) window.initHeaderDrawerAria()"
  >
    <header-drawer
      data-breakpoint="tablet"
    >
      <details id="Details-menu-drawer-container" class="menu-drawer-container">
        <summary
          class="header__icon header__icon--menu header__icon--summary link focus-inset"
          aria-label="Menu"
        >
          <span>
            


<svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-hamburger"
  fill="none"
  viewBox="0 0 18 16"
  width="18"
  height="16"
>
  <path
    d="M1 .5a.5.5 0 100 1h15.71a.5.5 0 000-1H1zM.5 8a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1A.5.5 0 01.5 8zm0 7a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1a.5.5 0 01-.5-.5z"
    fill="currentColor"
  >
</svg>

            


<svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
  width="18"
  height="17"
>
  <path
    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
    fill="currentColor"
  >
</svg>

          </span>
        </summary>
        
        <div
          id="menu-drawer"
          class="gradient menu-drawer motion-reduce color-background-1"
          tabindex="-1"
          style="background-color:#ffffff"
        ></div>
      </details>
    </header-drawer>
  </lazyload-section><script>
  window.initHeaderDrawerAria = function () {
    document.querySelectorAll('.js-header-drawer [id^="Details-"] summary').forEach((summary) => {
      summary.setAttribute('role', 'button');
      summary.setAttribute('aria-expanded', summary.parentNode.hasAttribute('open'));

      if (summary.nextElementSibling.getAttribute('id')) {
        summary.setAttribute('aria-controls', summary.nextElementSibling.id);
      }
      
      summary.addEventListener('click', (event) => {
        const details = event?.currentTarget?.closest('details') || null;
        if (!details) return;

        const isOpening = !details.hasAttribute('open');
        event.currentTarget.setAttribute('aria-expanded', isOpening);

        // Add scroll lock when drawer opens
        if (isOpening) {
          document.body.classList.add('overflow-hidden-mobile');
          document.documentElement.classList.add('overflow-hidden-mobile');
        } else {
          document.body.classList.remove('overflow-hidden-mobile');
          document.documentElement.classList.remove('overflow-hidden-mobile');
        }
      });
      if (summary.closest('header-drawer, menu-drawer')) return;
      summary.parentElement.addEventListener('keyup', onKeyUpEscape);
    });
  };
</script>

    

    
<div class="header__heading"><div class="brand--logo apl-section-header-brand-logo">
      <a href="/" class="header__heading-link link link--text focus-inset" aria-label="Home"><svg width="107" height="40" viewbox="0 0 107 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M66.4296 26.0583C62.7778 26.0391 60.8186 22.8506 60.8354 19.4845C60.8523 16.2667 63.0623 13.3178 66.4622 13.3347C70.0759 13.3538 72.2184 16.1408 72.2015 19.5767C72.1835 23.052 70.1973 26.0774 66.4296 26.0583ZM72.0857 13.5793H72.0126C70.6359 11.7495 68.4484 10.6416 66.1439 10.6304C60.9918 10.6045 57.8651 14.7872 57.8393 19.6852C57.8145 24.4415 60.9726 28.7311 66.0169 28.757C68.3551 28.7693 70.519 27.7965 71.9496 25.9362H72.0227L72.0103 28.3127L74.9356 28.3273L75.0807 0.189926L72.1554 0.175305L72.0857 13.5793ZM81.0764 28.3591L83.9994 28.3748L84.0872 11.1941L81.1652 11.1795L81.0764 28.3591ZM50.8538 20.6017C50.8392 23.491 50.4996 25.9766 46.9489 25.9586C43.4062 25.9406 43.0924 23.4517 43.1081 20.5623L43.1565 10.9856L40.2301 10.9699L40.1795 20.8761C40.157 25.4469 41.8597 28.6342 46.9343 28.6601C52.019 28.686 53.7522 25.5166 53.7747 20.9459L53.8264 11.0396L50.9022 11.025L50.8538 20.6017ZM97.7892 26.2191C94.17 26.2 91.7013 23.3365 91.7182 19.8242C91.7362 16.3511 94.2352 13.4775 97.8533 13.4967C101.473 13.5147 103.942 16.413 103.924 19.886C103.906 23.3984 101.408 26.2371 97.7892 26.2191ZM97.8679 10.7928C92.8249 10.7669 88.821 14.8012 88.7962 19.8432C88.7692 24.893 92.7686 28.8935 97.7746 28.9194C102.782 28.9452 106.819 24.9863 106.845 19.9354C106.871 14.8934 102.909 10.8187 97.8679 10.7928ZM82.6689 2.63341C81.5364 2.62779 80.5804 3.57252 80.5748 4.70621C80.568 5.87588 81.5139 6.79475 82.6476 6.80037C83.779 6.80712 84.7372 5.89725 84.744 4.72757C84.7496 3.59389 83.8004 2.63903 82.6689 2.63341ZM33.7811 4.76232L30.8614 4.74657L30.8299 10.9222L29.0316 10.9121L29.0181 13.6192L30.8153 13.6282L30.7422 28.1018L33.6608 28.1164L33.735 13.6428L36.8077 13.6597L36.8223 10.9515L33.7485 10.9368L33.7811 4.76232ZM2.09307 2.21992C0.961632 2.21429 0.00564838 3.16016 2.49464e-05 4.29272C-0.00559848 5.46239 0.940263 6.38238 2.0717 6.38801C3.20201 6.39363 4.16024 5.48376 4.16699 4.31408C4.17261 3.18152 3.22338 2.22667 2.09307 2.21992ZM0.498285 27.9467L3.42247 27.9613L3.51019 10.7818L0.587135 10.766L0.498285 27.9467ZM19.1107 12.2491L17.2853 11.4359C15.4284 10.5879 12.9834 9.47898 12.9957 7.10252C13.0092 4.58097 15.1349 2.83658 17.5845 2.84896C19.9238 2.86133 21.2363 3.96352 22.3228 5.86874L24.7802 4.31105C23.3316 1.60055 20.7459 0.0147457 17.6733 0.000124818C13.5783 -0.0212442 9.94671 2.70275 9.92534 6.9788C9.9051 10.9253 12.6752 12.5831 15.8839 14.0632L17.5642 14.7987C20.1127 15.983 22.6287 17.092 22.6118 20.3075C22.5961 23.4206 19.8811 25.6688 16.9198 25.6542C13.9585 25.6385 11.8159 23.3284 11.4268 20.5077L8.42726 21.3343C9.28202 25.6149 12.5582 28.4839 16.9782 28.5064C21.7672 28.5312 25.6619 24.8591 25.6867 20.0364C25.7092 15.6456 22.6827 13.8405 19.1107 12.2491Z" fill="#121212"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M60.9392 35.6663C60.9358 36.2725 61.2867 36.845 61.9435 36.8483C62.6183 36.8528 62.9771 36.3051 62.9805 35.6832C62.9839 35.0646 62.5981 34.5652 61.9492 34.563C61.3385 34.5596 60.9426 35.0893 60.9392 35.6663ZM60.4567 31.823L60.9842 31.8252L60.9707 34.5942H60.9853C61.2327 34.2669 61.623 34.0712 62.0447 34.0735C62.9636 34.078 63.5259 34.8394 63.5214 35.7144C63.517 36.5748 62.9434 37.3385 62.0324 37.334C61.6061 37.3317 61.2181 37.1529 60.974 36.8177L60.9594 36.8166L60.9572 37.2417L60.4297 37.2384L60.4567 31.823Z" fill="#121212"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M63.8516 34.1743L64.4589 34.1777L65.542 36.3944L66.5508 34.1878L67.1469 34.1912L64.8424 38.9981L64.243 38.9947L65.2518 36.9759L63.8516 34.1743Z" fill="#121212"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M72.1402 35.1342H72.1334C71.8883 34.8238 71.588 34.6134 71.1741 34.6112C70.5364 34.6078 70.0809 35.1285 70.0775 35.7505C70.0741 36.3601 70.4936 36.8943 71.1358 36.8977C71.5756 36.8999 71.886 36.7042 72.1447 36.3702H72.1582L72.1548 37.0743C71.8523 37.2756 71.5441 37.3847 71.1741 37.3835C70.2395 37.379 69.5365 36.6806 69.541 35.7471C69.5455 34.8249 70.289 34.1175 71.1955 34.1231C71.5329 34.1242 71.8714 34.2378 72.1436 34.438L72.1402 35.1342Z" fill="#121212"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M73.3218 35.7658C73.3185 36.3911 73.7661 36.9107 74.415 36.9141C75.0662 36.9164 75.5172 36.4024 75.5206 35.777C75.524 35.1506 75.0786 34.6299 74.4263 34.6265C73.7773 34.6231 73.3252 35.1394 73.3218 35.7658ZM72.7988 35.7717C72.8033 34.863 73.5243 34.1331 74.4285 34.1387C75.3395 34.1432 76.0514 34.8799 76.0469 35.7897C76.0413 36.694 75.3114 37.4037 74.4128 37.3992C73.5119 37.3947 72.7944 36.6771 72.7988 35.7717Z" fill="#121212"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M77.3388 35.7515C77.3354 36.3566 77.6897 36.9302 78.3454 36.9335C79.0213 36.9369 79.3812 36.3892 79.3846 35.7684C79.388 35.1498 79.0044 34.6504 78.3499 34.647C77.7414 34.6437 77.3422 35.1745 77.3388 35.7515ZM77.3703 34.6791H77.3827C77.6413 34.3383 78.0249 34.1561 78.4545 34.1572C79.3587 34.1629 79.9244 34.9513 79.9199 35.8083C79.9154 36.6855 79.3531 37.4233 78.4286 37.4188C78.0091 37.4166 77.62 37.2299 77.3703 36.8981H77.3602L77.3489 39.062L76.8203 39.0586L76.8451 34.2405L77.3725 34.2438L77.3703 34.6791Z" fill="#121212"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M81.2291 35.77C81.2269 36.3762 81.5778 36.9487 82.2357 36.952C82.9128 36.9554 83.2682 36.4088 83.2715 35.7869C83.2749 35.1683 82.8903 34.6689 82.2391 34.6655C81.6272 34.6633 81.2325 35.193 81.2291 35.77ZM81.2606 34.6985H81.2752C81.5339 34.3577 81.9141 34.1755 82.3403 34.1778C83.2479 34.1823 83.8159 34.9707 83.8114 35.8277C83.8069 36.7049 83.2434 37.4427 82.3189 37.4382C81.8983 37.436 81.5103 37.2493 81.264 36.9175H81.2494L81.2381 39.0814L80.7129 39.0791L80.7376 34.261L81.2629 34.2632L81.2606 34.6985Z" fill="#121212"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M86.7855 35.4945C86.7158 35.048 86.3402 34.6881 85.8824 34.6859C85.4269 34.6836 85.0074 35.039 84.9377 35.4855L86.7855 35.4945ZM84.9084 35.9339C84.9129 36.5053 85.3156 36.9698 85.915 36.972C86.366 36.9743 86.6528 36.7055 86.8586 36.3388L87.3029 36.5941C87.0048 37.1497 86.5044 37.4613 85.8745 37.4579C84.9523 37.4523 84.3686 36.7482 84.3731 35.862C84.3776 34.9465 84.9095 34.1918 85.8757 34.1963C86.8699 34.2019 87.3884 35.0263 87.3321 35.9463L84.9084 35.9339Z" fill="#121212"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M88.659 34.6339H88.6736C88.8581 34.3921 89.0178 34.2132 89.3563 34.2144C89.5351 34.2155 89.6791 34.2785 89.8343 34.3628L89.5824 34.8431C89.4744 34.77 89.4058 34.7036 89.2641 34.7036C88.6837 34.7013 88.6545 35.4436 88.6522 35.8452L88.6444 37.3849L88.1191 37.3815L88.1349 34.2998L88.6612 34.3032L88.659 34.6339Z" fill="#121212"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M91.749 36.4041L92.7173 34.085L93.6733 36.4142L94.6045 34.3335L95.2006 34.3369L93.6508 37.6311L92.7117 35.3255L91.749 37.6221L90.2441 34.311L90.8436 34.3144L91.749 36.4041Z" fill="#121212"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M96.4291 37.4262L95.9005 37.4239L95.9174 34.3411L96.4449 34.3434L96.4291 37.4262ZM96.5607 33.1741C96.5596 33.39 96.3909 33.552 96.1839 33.5509C95.9781 33.5497 95.8094 33.3855 95.8106 33.1707C95.8117 32.9694 95.9815 32.7984 96.1884 32.7996C96.3943 32.8007 96.5618 32.9739 96.5607 33.1741Z" fill="#121212"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M98.1333 34.6815H98.1513C98.3357 34.4397 98.4932 34.2608 98.8362 34.262C99.0139 34.2631 99.1545 34.3261 99.3108 34.4104L99.0567 34.8907C98.951 34.8164 98.879 34.7512 98.7395 34.7512C98.1614 34.7478 98.1288 35.4913 98.1266 35.8928L98.1187 37.4325L97.5957 37.4291L97.6114 34.3474L98.1344 34.3497L98.1333 34.6815Z" fill="#121212"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M102.201 35.5726C102.131 35.1261 101.758 34.7662 101.295 34.764C100.84 34.7617 100.421 35.1171 100.354 35.5636L102.201 35.5726ZM100.325 36.0121C100.325 36.5834 100.734 37.0479 101.329 37.0502C101.778 37.0524 102.069 36.7836 102.274 36.417L102.721 36.6723C102.419 37.2279 101.921 37.5394 101.289 37.536C100.367 37.5304 99.7826 36.8263 99.7871 35.9401C99.7905 35.0246 100.322 34.2699 101.294 34.2744C102.285 34.2801 102.809 35.1045 102.75 36.0244L100.325 36.0121Z" fill="#121212"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M103.98 35.8873C103.977 36.4935 104.328 37.066 104.984 37.0694C105.662 37.0739 106.018 36.5261 106.021 35.9042C106.024 35.2856 105.642 34.7862 104.99 34.784C104.375 34.7806 103.983 35.3104 103.98 35.8873ZM105.99 37.0499H105.973C105.719 37.3828 105.328 37.5571 104.911 37.5548C104.004 37.5515 103.435 36.7811 103.439 35.9297C103.443 35.0445 104.007 34.2899 104.934 34.2944C105.346 34.2966 105.738 34.4968 105.985 34.8264H106.002L106.016 32.0574L106.542 32.0596L106.515 37.4761L105.988 37.4739L105.99 37.0499Z" fill="#121212"></path>
</svg>
</a>
    </div><div class="apple_logo apl-section-header-apple-logo">
      <a href="/" class="header__heading-link link link--text focus-inset" aria-label="Home"><svg width="78" height="36" viewbox="0 0 78 36" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M67.3956 0.551707C68.5859 0.553638 69.3535 0.556397 69.9332 0.561638C70.5052 0.566603 70.8971 0.573776 71.2123 0.583982C71.8133 0.603292 72.2433 0.638325 72.6165 0.691289C73.243 0.78039 73.7505 0.930454 74.2151 1.15555C74.6777 1.37927 75.0969 1.67912 75.4562 2.04132C75.8154 2.40351 76.1117 2.82557 76.333 3.29093C76.5553 3.75878 76.7043 4.26966 76.7927 4.90192C76.8453 5.27818 76.8806 5.71293 76.9004 6.31981C76.9105 6.63814 76.9179 7.03344 76.9228 7.6108C76.928 8.19561 76.931 8.96966 76.9329 10.1691V25.8318C76.931 27.0312 76.928 27.8052 76.9228 28.39C76.9176 28.9671 76.9105 29.3627 76.9004 29.681C76.8806 30.2882 76.8456 30.7226 76.7927 31.0989C76.7043 31.7309 76.5553 32.242 76.333 32.7099C76.1117 33.1753 75.8152 33.5976 75.4562 33.9595C75.0969 34.3217 74.6777 34.6213 74.2151 34.8453C73.7505 35.0701 73.243 35.2204 72.6165 35.3095C72.2435 35.3625 71.8136 35.3975 71.2123 35.4168C70.8971 35.4271 70.5052 35.4342 69.9332 35.4392C69.3535 35.4442 68.5859 35.4472 67.3956 35.4491H10.8639C9.67355 35.4472 8.90599 35.4444 8.32628 35.4392C7.75425 35.4342 7.36239 35.4271 7.04721 35.4168C6.44614 35.3975 6.01622 35.3625 5.64298 35.3095C5.01645 35.2204 4.50904 35.0704 4.04434 34.8453C3.58184 34.6216 3.1626 34.3217 2.80332 33.9595C2.44405 33.5973 2.14777 33.1753 1.92651 32.7099C1.70415 32.242 1.55519 31.7312 1.46674 31.0989C1.41416 30.7226 1.37884 30.2879 1.3594 29.681C1.34927 29.3627 1.34187 28.9674 1.33694 28.39C1.33174 27.8052 1.32873 27.0312 1.32681 25.8318V10.1688C1.32873 8.96938 1.33174 8.19533 1.33694 7.61053C1.34215 7.03344 1.34927 6.63787 1.3594 6.31953C1.37911 5.71238 1.41416 5.27791 1.46674 4.90164C1.55519 4.26966 1.70415 3.75851 1.92651 3.29066C2.14777 2.82529 2.44433 2.40296 2.80332 2.04104C3.16232 1.67912 3.58184 1.37927 4.04434 1.15527C4.50904 0.930454 5.01645 0.780114 5.64298 0.691013C6.01595 0.638049 6.44587 0.603016 7.04721 0.583706C7.36239 0.5735 7.75425 0.566327 8.32628 0.561362C8.90599 0.556397 9.67355 0.553362 10.8639 0.551431H67.3956V0.551707ZM67.3964 0H67.3959H67.3953H10.8639C9.67081 0.00193098 8.90216 0.00496536 8.32136 0.00993073C7.75589 0.0148961 7.35746 0.0217924 7.02941 0.0325507C6.42916 0.0518605 5.97788 0.086618 5.56658 0.144823C4.89131 0.24082 4.33214 0.40385 3.80693 0.657911C3.28856 0.908938 2.8203 1.243 2.41585 1.65098C2.01167 2.05842 1.68088 2.52985 1.43251 3.05232C1.18113 3.58113 1.01957 4.14415 0.924276 4.8244C0.865949 5.24177 0.831172 5.6972 0.81173 6.3016C0.80105 6.63704 0.793931 7.03896 0.789001 7.60556C0.784072 8.18127 0.780786 8.94759 0.77887 10.1677V25.8312C0.780786 27.0521 0.784072 27.8185 0.789001 28.3944C0.793931 28.9608 0.80105 29.363 0.81173 29.6981C0.831172 30.3025 0.865949 30.758 0.924276 31.1753C1.01957 31.8556 1.18086 32.4189 1.43251 32.9477C1.68088 33.4701 2.01167 33.9416 2.41585 34.349C2.8203 34.757 3.28856 35.0911 3.80693 35.3421C4.33187 35.5964 4.89104 35.7595 5.56631 35.8552C5.97788 35.9137 6.42916 35.9481 7.02941 35.9674C7.35719 35.9782 7.75561 35.9851 8.32108 35.9901C8.90161 35.995 9.67054 35.9981 10.8628 36H67.3953C68.5884 35.9981 69.3571 35.9953 69.9379 35.9901C70.5033 35.9851 70.9018 35.9782 71.2298 35.9674C71.83 35.9481 72.2813 35.9134 72.6926 35.8552C73.3679 35.7592 73.9271 35.5961 74.4523 35.3421C74.9707 35.0911 75.4389 34.757 75.8434 34.349C76.2475 33.9416 76.5783 33.4701 76.8267 32.9477C77.0781 32.4189 77.2396 31.8559 77.3349 31.1756C77.3933 30.7585 77.428 30.3031 77.4475 29.6984C77.4582 29.363 77.4653 28.9608 77.4702 28.3944C77.4754 27.8182 77.4784 27.0519 77.4803 25.8323V10.1688C77.4784 8.94814 77.4751 8.18182 77.4702 7.60556C77.4653 7.03923 77.4582 6.63704 77.4475 6.30188C77.428 5.6972 77.3933 5.24177 77.3349 4.82468C77.2396 4.14442 77.0784 3.58113 76.8267 3.05232C76.5783 2.52985 76.2475 2.05842 75.8434 1.65098C75.4389 1.243 74.9707 0.908938 74.4523 0.657911C73.9273 0.40385 73.3682 0.240544 72.6929 0.144823C72.2813 0.0863422 71.83 0.0518605 71.2298 0.0325507C70.9018 0.0220683 70.5033 0.0148961 69.9381 0.00993073C69.3573 0.00496536 68.5887 0.00193098 67.3964 0ZM22.5344 11.7168C21.5471 11.6432 20.6516 12.0003 19.9308 12.2877C19.4756 12.4692 19.09 12.623 18.7949 12.623C18.4598 12.623 18.0462 12.4578 17.5821 12.2725C16.9748 12.03 16.2811 11.753 15.5645 11.7667C13.9039 11.7913 12.3737 12.7399 11.5177 14.2375C9.79313 17.2529 11.0774 21.7215 12.7574 24.1683C13.5792 25.3638 14.5592 26.7114 15.8462 26.6623C16.4215 26.6395 16.8308 26.4638 17.254 26.2821C17.7424 26.0725 18.2494 25.8548 19.0517 25.8548C19.8172 25.8548 20.3017 26.066 20.7676 26.2691C21.2127 26.4632 21.6409 26.6499 22.2811 26.638C23.6146 26.6132 24.4597 25.4176 25.2754 24.2152C26.1766 22.8902 26.5709 21.6054 26.6247 21.4299L26.6301 21.4125C26.6005 21.4012 24.0306 20.4078 24.0048 17.425C23.982 14.9773 25.9504 13.7774 26.1114 13.6792L26.1186 13.6748C24.9578 11.9537 23.1658 11.764 22.5344 11.7168ZM22.5559 6.95508C22.6827 8.1087 22.2224 9.26866 21.5384 10.1015C20.8549 10.9348 19.7349 11.582 18.6374 11.4962C18.4865 10.3663 19.0421 9.18536 19.6744 8.448C20.3806 7.61575 21.5715 6.99453 22.5559 6.95508Z" fill="#121212"></path>
<path d="M32.4756 10.1289H34.8561C36.1108 10.1289 36.9797 10.9774 36.9797 12.2411V12.2502C36.9797 13.5095 36.1108 14.3715 34.8561 14.3715H33.4686V16.5731H32.4756V10.1289ZM33.4686 10.9727V13.5318H34.608C35.4725 13.5318 35.9689 13.0629 35.9689 12.2546V12.2458C35.9689 11.4417 35.4728 10.973 34.608 10.973H33.4686V10.9727Z" fill="#121212"></path>
<path d="M37.8961 11.8765H38.8537V12.6803H38.8758C39.0264 12.1311 39.4167 11.7871 39.9487 11.7871C40.0859 11.7871 40.2056 11.8095 40.2812 11.823V12.7206C40.2059 12.6894 40.0372 12.6671 39.8512 12.6671C39.2348 12.6671 38.8537 13.0737 38.8537 13.7746V16.5748H37.8961V11.8765Z" fill="#121212"></path>
<path d="M40.7574 14.2433V14.2389C40.7574 12.7697 41.5997 11.7871 42.9075 11.7871C44.2154 11.7871 45.0177 12.7341 45.0177 14.1451V14.4712H41.715C41.7325 15.36 42.2158 15.878 42.9782 15.878C43.5456 15.878 43.9224 15.5831 44.0423 15.2303L44.0557 15.1947H44.9643L44.9555 15.2438C44.8049 15.9897 44.0867 16.6686 42.956 16.6686C41.5863 16.6683 40.7574 15.726 40.7574 14.2433ZM41.7279 13.7879H44.0689C43.9889 12.9752 43.5368 12.5777 42.9116 12.5777C42.2911 12.5774 41.8122 13.0017 41.7279 13.7879Z" fill="#121212"></path>
<path d="M45.9835 11.8765H46.9411V12.6045H46.9633C47.1629 12.1132 47.6369 11.7871 48.2487 11.7871C48.8916 11.7871 49.3613 12.122 49.5477 12.7118H49.5699C49.8093 12.1402 50.3588 11.7871 51.024 11.7871C51.946 11.7871 52.549 12.4034 52.549 13.3457V16.5745H51.587V13.5779C51.587 12.9661 51.263 12.6133 50.6957 12.6133C50.1283 12.6133 49.7337 13.042 49.7337 13.6362V16.5748H48.7936V13.5065C48.7936 12.9617 48.4524 12.6133 47.9113 12.6133C47.3439 12.6133 46.9406 13.0643 46.9406 13.6717V16.5745H45.983V11.8765H45.9835Z" fill="#121212"></path>
<path d="M53.6573 10.5993C53.6573 10.2912 53.9054 10.041 54.2156 10.041C54.5305 10.041 54.7743 10.2912 54.7743 10.5993C54.7743 10.9031 54.5305 11.153 54.2156 11.153C53.9054 11.153 53.6573 10.9031 53.6573 10.5993ZM53.737 11.8765H54.6946V16.5746H53.737V11.8765Z" fill="#121212"></path>
<path d="M55.8882 14.9207V11.875H56.8458V14.7331C56.8458 15.4432 57.1739 15.8363 57.8388 15.8363C58.5127 15.8363 58.9472 15.3494 58.9472 14.6173V11.8753H59.9092V16.5733H58.9472V15.8677H58.9251C58.6811 16.3411 58.2068 16.6671 57.4976 16.6671C56.4734 16.6669 55.8882 16.0015 55.8882 14.9207Z" fill="#121212"></path>
<path d="M61.0338 11.8765H61.9914V12.6045H62.0136C62.2132 12.1132 62.6872 11.7871 63.299 11.7871C63.9419 11.7871 64.4116 12.122 64.598 12.7118H64.6202C64.8596 12.1402 65.4091 11.7871 66.0743 11.7871C66.9963 11.7871 67.5993 12.4034 67.5993 13.3457V16.5745H66.6373V13.5779C66.6373 12.9661 66.3133 12.6133 65.746 12.6133C65.1786 12.6133 64.784 13.042 64.784 13.6362V16.5748H63.8439V13.5065C63.8439 12.9617 63.5027 12.6133 62.9616 12.6133C62.3942 12.6133 61.9909 13.0643 61.9909 13.6717V16.5745H61.0333V11.8765H61.0338Z" fill="#121212"></path>
<path d="M32.4756 19.6562H34.8561C36.1108 19.6562 36.9797 20.5045 36.9797 21.7685V21.7773C36.9797 23.0366 36.1108 23.8986 34.8561 23.8986H33.4686V26.1002H32.4756V19.6562ZM33.4686 20.5004V23.0592H34.608C35.4725 23.0592 35.9689 22.5902 35.9689 21.782V21.7732C35.9689 20.969 35.4728 20.5004 34.608 20.5004H33.4686Z" fill="#121212"></path>
<path d="M37.4825 24.7629V24.754C37.4825 23.9367 38.112 23.4365 39.2159 23.3695L40.4837 23.2937V22.9408C40.4837 22.4228 40.1513 22.11 39.5571 22.11C39.0031 22.11 38.6613 22.3737 38.5817 22.7486L38.5729 22.7888H37.6684L37.6728 22.7397C37.7393 21.9312 38.4354 21.3105 39.5839 21.3105C40.723 21.3105 41.4457 21.918 41.4457 22.8603V26.0983H40.4837V25.3568H40.4662C40.1956 25.8613 39.6548 26.1829 39.0384 26.1829C38.1076 26.1832 37.4825 25.607 37.4825 24.7629ZM39.3002 25.4106C39.9738 25.4106 40.4837 24.9504 40.4837 24.3386V23.9725L39.3443 24.044C38.7681 24.0796 38.4488 24.3342 38.4488 24.7317V24.7405C38.4491 25.1515 38.7859 25.4106 39.3002 25.4106Z" fill="#121212"></path>
<path d="M42.5538 21.4038H43.5114V22.2077H43.5335C43.6842 21.6584 44.0744 21.3145 44.6064 21.3145C44.7436 21.3145 44.8633 21.3368 44.9389 21.3503V22.2479C44.8636 22.2168 44.6949 22.1944 44.5089 22.1944C43.8925 22.1944 43.5114 22.6008 43.5114 23.302V26.1019H42.5538V21.4038Z" fill="#121212"></path>
<path d="M46.3461 24.8628V22.1697H45.6768V21.4017H46.3461V20.1777H47.3258V21.4017H48.1991V22.1697H47.3258V24.8046C47.3258 25.2824 47.5386 25.4253 47.942 25.4253C48.0441 25.4253 48.1285 25.4165 48.1991 25.4076V26.1536C48.0882 26.1712 47.9067 26.1938 47.7114 26.1938C46.7894 26.1936 46.3461 25.8005 46.3461 24.8628Z" fill="#121212"></path>
<path d="M49.2159 21.4038H50.1735V22.1136H50.1957C50.4394 21.6361 50.9183 21.3145 51.6232 21.3145C52.647 21.3145 53.2369 21.9798 53.2369 23.0606V26.1019H52.2749V23.2438C52.2749 22.5379 51.9468 22.1406 51.2817 22.1406C50.6078 22.1406 50.1735 22.6319 50.1735 23.3643V26.1022H49.2159V21.4038Z" fill="#121212"></path>
<path d="M54.1758 23.767V23.7623C54.1758 22.2931 55.0182 21.3105 56.326 21.3105C57.6338 21.3105 58.4362 22.2576 58.4362 23.6685V23.9946H55.1334C55.151 24.8834 55.6343 25.4017 56.3966 25.4017C56.964 25.4017 57.3408 25.1068 57.4608 24.754L57.4742 24.7182H58.3828L58.374 24.7673C58.2234 25.5132 57.5051 26.1921 56.3745 26.1921C55.005 26.1921 54.1758 25.2497 54.1758 23.767ZM55.1466 23.3116H57.4876C57.4076 22.4989 56.9555 22.1011 56.3304 22.1011C55.7099 22.1011 55.2309 22.5254 55.1466 23.3116Z" fill="#121212"></path>
<path d="M59.4498 21.4038H60.4074V22.2077H60.4295C60.5802 21.6584 60.9704 21.3145 61.5024 21.3145C61.6396 21.3145 61.7593 21.3368 61.8349 21.3503V22.2479C61.7596 22.2168 61.5909 22.1944 61.4049 22.1944C60.7885 22.1944 60.4074 22.6008 60.4074 23.302V26.1019H59.4498V21.4038Z" fill="#121212"></path>
</svg>
</a>
    </div></div>
<div class="search-container apl-section-predictive-search">
	    
      <div class="container_search container_search_port"><predictive-search class="search-modal__form" data-loading-text="Sedang memuat..."><form
          class="nosubmit_form search search-modal__form apl-section-predictive-search-form"
          action="/search"
          id="nosubmit_form2"
          method="get"
          role="search"
        ><input type="hidden" name="type" value="product">
          <input
            class="nosubmit"
            id="Search-In-Modal"
            type="search"
            name="q"
            value=""
            placeholder="Cari"
            aria-label="Cari"role="combobox"
              aria-expanded="false"
              aria-owns="predictive-search-results-list"
              aria-controls="predictive-search-results-list"
              aria-haspopup="listbox"
              aria-autocomplete="list"
              autocorrect="off"
              autocomplete="off"
              autocapitalize="off"
              spellcheck="false">
          <div
            class="predictive-search predictive-search--header"
            tabindex="-1"
            data-predictive-search
            style="max-height: 540px;"
          >
            <div class="predictive-search__loading-state">
              <svg
                aria-hidden="true"
                focusable="false"
                role="presentation"
                class="spinner"
                viewBox="0 0 66 66"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
              </svg>
            </div>
          </div>
          <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span>
        </form>
        <button type="button" class="btn_close btn_close_desktop" id="btn_close2" aria-label="Tutup">
          <svg
            class="icon icon-close"
            aria-hidden="true"
            focusable="false"
            role="presentation"
            width="16.61px"
            height="16.61px"
          >
            <use href="#icon-close"/>
          </svg>
        </button></predictive-search></div>
      
    </div><link href="https://www.istudio.store/cdn/shop/t/4/assets/component-my-store-locator.css?v=118904724583716226691753282910" rel="stylesheet" type="text/css" media="all" />
<my-store-locator
  class="no-js-hidden my-store-locator apl-section-store-locator"
  data-limit-search-to-countries=""
  data-storefront-api-access-token="50dba5e454765ad99c9e3f82da83c235"
  data-default-location-id=""
  data-number-of-locations-to-fetch="31"
  data-apple-maps-access-token="eyJraWQiOiJONE1KUDkyQUsyIiwidHlwIjoiSldUIiwiYWxnIjoiRVMyNTYifQ.eyJpc3MiOiJYNTRKQzQ3RkM2IiwiaWF0IjoxNzUwMTUxNTE4LCJvcmlnaW4iOiJ3d3cuaXN0dWRpby5zdG9yZSJ9.NUMpMbLJpE3V-QQmj1Tbs6fvsg1r0VMJcx06yIMNXak6_dtE-hFCM73YmEhZPrcEy92gc4FzyXdnTR5NbCzV4g"
  data-distance-unit="km"
  data-distance-miles-label="mil"
  data-distance-km-label="kilometer"
  data-error-text="Error: Try again"
  data-select-text="Pilih cabang Anda"
  data-low-stock-html="Tersedia {{ quantity }} produk"
  data-unavailable-text="Produk ini tidak tersedia di cabang ini, silakan pilih cabang lain atau kirim ke rumah"
  data-view-store-availability-text="Lihat cabang yang tersedia"
  data-loading-text="Loading store"
>
  <button
    class="js-my-store-locator-btn my-store-locator__btn focus-inset"
    type="button"
    disabled
    aria-haspopup="dialog"
    
  >
    <div class="my-store-locator__icon">
      <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none"><path d="M12.7742 13.3755H3.05191C2.2285 13.3755 1.55871 12.7056 1.55871 11.8822L1.55859 5.46973H2.29228V11.8822C2.29228 12.301 2.63304 12.6417 3.0518 12.6417H12.7743C13.1931 12.6417 13.5338 12.3011 13.5338 11.8822L13.534 5.46973H14.2676V11.8822C14.2676 12.7056 13.5977 13.3755 12.7743 13.3755H12.7742Z" fill="#1D1D1F"/><path d="M6.19597 6.04216C5.04487 6.04216 4.1084 5.10557 4.1084 3.95459H4.84209C4.84209 4.70103 5.44941 5.30836 6.19597 5.30836C6.94253 5.30836 7.54985 4.70103 7.54985 3.95459H8.28354C8.28354 5.10557 7.34707 6.04216 6.19597 6.04216Z" fill="#1D1D1F"/><path d="M9.63738 6.04397C8.48628 6.04397 7.5498 5.10738 7.5498 3.95639V2.43213H8.28349V3.95639C8.28349 4.70284 8.89082 5.31016 9.63738 5.31016C10.3839 5.31016 10.9913 4.70284 10.9913 3.95639H11.7249C11.7249 5.10738 10.7885 6.04397 9.63738 6.04397Z" fill="#1D1D1F"/><path d="M13.0793 6.04286C11.9282 6.04286 10.9917 5.10627 10.9917 3.95529V2.43102H11.7254V3.95529C11.7254 4.70173 12.3327 5.30906 13.0793 5.30906C13.8258 5.30906 14.4333 4.70173 14.4333 3.95529V2.54174L13.231 0.73392H2.60295L1.40068 2.54163V3.95517C1.40068 4.70162 2.00812 5.30894 2.75468 5.30894C3.50124 5.30894 4.10856 4.70162 4.10856 3.95517V2.43091H4.84225V3.95517C4.84225 5.10627 3.90578 6.04275 2.75468 6.04275C1.60347 6.04275 0.666992 5.10616 0.666992 3.95517V2.43091C0.666992 2.35862 0.688332 2.2879 0.728328 2.22768L2.10075 0.16379C2.16868 0.0614505 2.28342 0 2.40621 0H13.4275C13.5503 0 13.6651 0.0614477 13.733 0.16379L15.1057 2.22779C15.1458 2.28802 15.167 2.35874 15.167 2.43102V3.95529C15.167 5.10627 14.2305 6.04286 13.0793 6.04286H13.0793Z" fill="#1D1D1F"/><path d="M1.0332 2.06055H14.7997V2.79435H1.0332V2.06055Z" fill="#1D1D1F"/><rect x="5.4806" y="8.38246" width="4.63549" height="4.63549" rx="0.534864" stroke="black" stroke-width="0.713153"/></svg>
    </div>
    <p class="js-my-store-locator-info my-store-locator__info">
      Loading store
      <i class="fa fa-spinner fa-spin"></i>
    </p>
  </button>
  <div
    class="js-my-store-locator-details my-store-locator__details"
    tabindex="-1"
    role="dialog"
    aria-modal="true"
    aria-labelledby="MyStoreDetailsHeading"
  >
    <button
      class="js-my-store-locator-close my-store-locator__close"
      type="button"
      aria-label="Tutup"
    >


<svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
  width="18"
  height="17"
>
  <path
    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
    fill="currentColor"
  >
</svg>
</button>
    <div class="my-store-locator__details-header">
      <h2 class="my-store-locator__details-title" id="MyStoreDetailsHeading"></h2>
      <span class="js-my-store-locator-distance my-store-locator__details-distance hidden apl-section-stores-locator-store-distance"></span>
    </div>
    <div class="js-my-store-locator-location my-store-locator__details-location"></div>
    <div class="my-store-locator-content">
      <div class="js-my-store-locator-address my-store-locator__details-info hidden">
        Alamat: <a href="#" target="_blank"></a>
      </div>
      <div class="js-my-store-locator-telephone my-store-locator__details-info hidden">
        Telepon: <a href="#"></a>
      </div>
      <div class="js-my-store-locator-email my-store-locator__details-info hidden">
        LINE: <a href="#" target="_blank"></a>
      </div>
      <div class="js-my-store-locator-hours my-store-locator__details-info hidden">
        Jam operasional: <span></span>
      </div>
      <div class="js-my-store-locator-services hidden"></div>
    </div>
    <div class="my-store-locator__details-footer"><a
          class="my-store-locator__details-btn--secondary button button--secondary button--full-width"
          href="/pages/store-locator"
        >
          Lihat cabang di peta
        </a><button
        class="js-my-store-locator-drawer-btn my-store-locator__details-btn button button--full-width"
        type="button"
        aria-haspopup="dialog"
        
      >
        Pilih cabang lain
      </button>
    </div>
  </div>
</my-store-locator>
<script src="https://www.istudio.store/cdn/shop/t/4/assets/my-store-locator.js?v=78638212907731456491759920446" defer="defer"></script>

<script>
  SDG.Data.mapsToken = "eyJraWQiOiJONE1KUDkyQUsyIiwidHlwIjoiSldUIiwiYWxnIjoiRVMyNTYifQ.eyJpc3MiOiJYNTRKQzQ3RkM2IiwiaWF0IjoxNzUwMTUxNTE4LCJvcmlnaW4iOiJ3d3cuaXN0dWRpby5zdG9yZSJ9.NUMpMbLJpE3V-QQmj1Tbs6fvsg1r0VMJcx06yIMNXak6_dtE-hFCM73YmEhZPrcEy92gc4FzyXdnTR5NbCzV4g";
  SDG.Data.googleMapsToken = "";
  SDG.Data.mapProvider = "apple_maps";
  
    SDG.Data.mapPage = false;
  
  SDG.Data.storeServiceTrigger = 'Lihat layanan cabang';
  SDG.Data.storeHours =  'Jam operasional';
  SDG.Data.storeAddress = 'Alamat';
  SDG.Data.storeEmail = 'LINE';
  SDG.Data.storePhone = 'Telepon';
  SDG.Data.myStore = 'Cabang utama';
  SDG.Data.makeThisMyStore = 'Jadikan cabang utama';
  SDG.Data.shopCountry = 'Indonesia';
</script>
<script src="https://www.istudio.store/cdn/shop/t/4/assets/mapkit.js?v=15767078762932498981753282915" defer></script><script async>
  document?.addEventListener('DOMContentLoaded', function() {
    if (window?.mapkit) {
     mapkit.init({
       authorizationCallback: function (done) {
         done("eyJraWQiOiJONE1KUDkyQUsyIiwidHlwIjoiSldUIiwiYWxnIjoiRVMyNTYifQ.eyJpc3MiOiJYNTRKQzQ3RkM2IiwiaWF0IjoxNzUwMTUxNTE4LCJvcmlnaW4iOiJ3d3cuaXN0dWRpby5zdG9yZSJ9.NUMpMbLJpE3V-QQmj1Tbs6fvsg1r0VMJcx06yIMNXak6_dtE-hFCM73YmEhZPrcEy92gc4FzyXdnTR5NbCzV4g");
       },
       language: 'th',
     });
    }

    if (window?.google) {
      google.maps.importLibrary('geocoding');
      google.maps.importLibrary('places');
    }
  });
</script><div class="header__icons header__icons--localization header-localization translate-adapt-localization">
      <div class="desktop-localization-wrapper">

        
          
            <noscript class="small-hide medium-hide"><form method="post" action="/localization" id="HeaderLanguageMobileFormNoScript" accept-charset="UTF-8" class="localization-form" enctype="multipart/form-data"><input type="hidden" name="form_type" value="localization" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="return_to" value="/products/powerjoy-27m-us-plug" /><div class="localization-form__select">
                  <h2 class="visually-hidden" id="HeaderLanguageMobileLabelNoScript">Bahasa</h2>
                  <select class="localization-selector link" name="locale_code" aria-labelledby="HeaderLanguageMobileLabelNoScript"><option value="th" lang="th" selected>
                        Bahasa Indonesia
                      </option><option value="en" lang="en">
                        English
                      </option></select>
                  <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

                </div>
                <button class="button button--tertiary">Perbarui bahasa</button></form></noscript>

            <localization-form class="small-hide medium-hide no-js-hidden"><form method="post" action="/localization" id="HeaderLanguageForm" accept-charset="UTF-8" class="localization-form apl-section-language-selector" enctype="multipart/form-data"><input type="hidden" name="form_type" value="localization" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="return_to" value="/products/powerjoy-27m-us-plug" /><div>
                  <h2 class="visually-hidden" id="HeaderLanguageLabel">Bahasa</h2><div class="disclosure">
  <button
    type="button"
    class="disclosure__button localization-form__select localization-selector link link--text caption-large"
    aria-expanded="false"
    aria-controls="HeaderLanguageList"
    aria-describedby="HeaderLanguageLabel"
  >
    <span>Thai
</span>
    <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

  </button>
  <div class="disclosure__list-wrapper" hidden>
    <ul id="HeaderLanguageList" role="list" class="disclosure__list list-unstyled"><li class="disclosure__item" tabindex="-1">
          <a
            class="link link--text disclosure__link caption-large disclosure__link--active focus-inset"
            href="#"
            hreflang="th"
            lang="th"
            
              aria-current="true"
            
            data-value="th"
          >Thai
          </a>
        </li><li class="disclosure__item" tabindex="-1">
          <a
            class="link link--text disclosure__link caption-large focus-inset"
            href="#"
            hreflang="en"
            lang="en"
            
            data-value="en"
          >Eng
          </a>
        </li></ul>
  </div>
</div>
<input type="hidden" name="locale_code" value="th">
</div></form></localization-form>
          
          
        
      </div>
      
<a href="/account/login" class="header__icon header__icon--account link focus-inset apl-section-header-account small-hide">
          


<svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-account"
  fill="none"
  viewBox="0 0 18 19"
  width="18"
  height="19"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M6 4.5a3 3 0 116 0 3 3 0 01-6 0zm3-4a4 4 0 100 8 4 4 0 000-8zm5.58 12.15c1.12.82 1.83 2.24 1.91 4.85H1.51c.08-2.6.79-4.03 1.9-4.85C4.66 11.75 6.5 11.5 9 11.5s4.35.26 5.58 1.15zM9 10.5c-2.5 0-4.65.24-6.17 1.35C1.27 12.98.5 14.93.5 18v.5h17V18c0-3.07-.77-5.02-2.33-6.15-1.52-1.1-3.67-1.35-6.17-1.35z" fill="currentColor">
</svg>

          <span class="visually-hidden">Masuk</span>
        </a>
      <a href="javascript: void(0)" class="header__icon header__icon--cart link focus-inset apl-section-header-cart" id="cart-icon-bubble"><svg width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 4.25C6.5 2.93882 7.76806 1.75 9.5 1.75C11.2319 1.75 12.5 2.93882 12.5 4.25H6.5ZM5.5 4.25C5.5 2.24747 7.36595 0.75 9.5 0.75C11.6341 0.75 13.5 2.24747 13.5 4.25H17C18.1046 4.25 19 5.14543 19 6.25V19.25C19 20.3546 18.1046 21.25 17 21.25H2C0.895431 21.25 0 20.3546 0 19.25V6.25C0 5.14543 0.895431 4.25 2 4.25H5.5ZM1 6.25C1 5.69772 1.44772 5.25 2 5.25H17C17.5523 5.25 18 5.69772 18 6.25V19.25C18 19.8023 17.5523 20.25 17 20.25H2C1.44772 20.25 1 19.8023 1 19.25V6.25Z" fill="currentColor"/>
</svg><span class="visually-hidden">Keranjang</span></a>

      
    </div>
  </header>

  
  <div class="header_nav apl-section-header-nav">


<lazyload-section data-selectors='[".js-header-dropdown-menu-list"]'><nav class="header__inline-menu">
  <ul class="list-menu list-menu--inline"><li><header-menu class="apl-section-header-nav-menu-1">
            <details
              id="Details-HeaderMenu-1"
              
                class="mainMenuUpdate2"
              
            >
              <summary
                id="headerCss HeaderMenu-mac"
                class="header__menu-item list-menu__item link focus-inset apl-section-header-nav-menu-item"
              >
                <span
                >
                  
                  
                    Mac
                  
                  
                </span>
                <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

              </summary><ul
                  id="HeaderMenu-MenuList-1"
                  class="js-header-dropdown-menu-list header__submenu list-menu list-menu--disclosure color-background-1 gradient caption-large motion-reduce global-settings-popup apl-section-header-nav-menu-list"
                  tabindex="-1"
                ></ul></details>
          </header-menu></li><li><header-menu class="apl-section-header-nav-menu-2">
            <details
              id="Details-HeaderMenu-2"
              
                class="mainMenuUpdate2"
              
            >
              <summary
                id="headerCss HeaderMenu-ipad"
                class="header__menu-item list-menu__item link focus-inset apl-section-header-nav-menu-item"
              >
                <span
                >
                  
                  
                    iPad
                  
                  
                </span>
                <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

              </summary><ul
                  id="HeaderMenu-MenuList-2"
                  class="js-header-dropdown-menu-list header__submenu list-menu list-menu--disclosure color-background-1 gradient caption-large motion-reduce global-settings-popup apl-section-header-nav-menu-list"
                  tabindex="-1"
                ></ul></details>
          </header-menu></li><li><header-menu class="apl-section-header-nav-menu-3">
            <details
              id="Details-HeaderMenu-3"
              
                class="mainMenuUpdate2"
              
            >
              <summary
                id="headerCss HeaderMenu-iphone"
                class="header__menu-item list-menu__item link focus-inset apl-section-header-nav-menu-item"
              >
                <span
                >
                  
                  
                    iPhone
                  
                  
                </span>
                <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

              </summary><ul
                  id="HeaderMenu-MenuList-3"
                  class="js-header-dropdown-menu-list header__submenu list-menu list-menu--disclosure color-background-1 gradient caption-large motion-reduce global-settings-popup apl-section-header-nav-menu-list"
                  tabindex="-1"
                ></ul></details>
          </header-menu></li><li><header-menu class="apl-section-header-nav-menu-4">
            <details
              id="Details-HeaderMenu-4"
              
                class="mainMenuUpdate2"
              
            >
              <summary
                id="headerCss HeaderMenu-watch"
                class="header__menu-item list-menu__item link focus-inset apl-section-header-nav-menu-item"
              >
                <span
                >
                  
                  
                    Watch
                  
                  
                </span>
                <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

              </summary><ul
                  id="HeaderMenu-MenuList-4"
                  class="js-header-dropdown-menu-list header__submenu list-menu list-menu--disclosure color-background-1 gradient caption-large motion-reduce global-settings-popup apl-section-header-nav-menu-list"
                  tabindex="-1"
                ></ul></details>
          </header-menu></li><li><header-menu class="apl-section-header-nav-menu-5">
            <details
              id="Details-HeaderMenu-5"
              
                class="mainMenuUpdate2"
              
            >
              <summary
                id="headerCss HeaderMenu-airpods"
                class="header__menu-item list-menu__item link focus-inset apl-section-header-nav-menu-item"
              >
                <span
                >
                  
                  
                    AirPods
                  
                  
                </span>
                <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

              </summary><ul
                  id="HeaderMenu-MenuList-5"
                  class="js-header-dropdown-menu-list header__submenu list-menu list-menu--disclosure color-background-1 gradient caption-large motion-reduce global-settings-popup apl-section-header-nav-menu-list"
                  tabindex="-1"
                ></ul></details>
          </header-menu></li><li><header-menu class="apl-section-header-nav-menu-6">
            <details
              id="Details-HeaderMenu-6"
              
                class="mainMenuUpdate2"
              
            >
              <summary
                id="headerCss HeaderMenu-tv-home"
                class="header__menu-item list-menu__item link focus-inset apl-section-header-nav-menu-item"
              >
                <span
                >
                  
                  
                    TV dan Rumah
                  
                  
                </span>
                <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

              </summary><ul
                  id="HeaderMenu-MenuList-6"
                  class="js-header-dropdown-menu-list header__submenu list-menu list-menu--disclosure color-background-1 gradient caption-large motion-reduce global-settings-popup apl-section-header-nav-menu-list"
                  tabindex="-1"
                ></ul></details>
          </header-menu></li><li><header-menu class="apl-section-header-nav-menu-7">
            <details
              id="Details-HeaderMenu-7"
              
                class="mainMenuUpdate2"
              
            >
              <summary
                id="headerCss HeaderMenu-accessories"
                class="header__menu-item list-menu__item link focus-inset apl-section-header-nav-menu-item"
              >
                <span
                >
                  
                  
                    Aksesori
                  
                  
                </span>
                <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

              </summary><ul
                  id="HeaderMenu-MenuList-7"
                  class="js-header-dropdown-menu-list header__submenu list-menu list-menu--disclosure color-background-1 gradient caption-large motion-reduce global-settings-popup apl-section-header-nav-menu-list"
                  tabindex="-1"
                ></ul></details>
          </header-menu></li><li><header-menu class="apl-section-header-nav-menu-8">
            <details
              id="Details-HeaderMenu-8"
              
                class="mainMenuUpdate2"
              
            >
              <summary
                id="headerCss HeaderMenu-services"
                class="header__menu-item list-menu__item link focus-inset apl-section-header-nav-menu-item"
              >
                <span
                >
                  
                  
                    Layanan bantuan
                  
                  
                </span>
                <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

              </summary><ul
                  id="HeaderMenu-MenuList-8"
                  class="js-header-dropdown-menu-list header__submenu list-menu list-menu--disclosure color-background-1 gradient caption-large motion-reduce global-settings-popup apl-section-header-nav-menu-list"
                  tabindex="-1"
                ></ul></details>
          </header-menu></li>
    <li class="right_header_division right_menu_divider"></li>
    
<li><a
              href="/pages/store-locator"
              class="rightMenuUpdate headerCss header__menu-item header__menu-item list-menu__item link link--text focus-inset apl-section-header-nav-menu-link"
              
            >
              <span
              >Cabang kami</span>
            </a></li><li><a
              href="/pages/education"
              class="rightMenuUpdate headerCss header__menu-item header__menu-item list-menu__item link link--text focus-inset apl-section-header-nav-menu-link"
              
            >
              <span
              >Untuk pendidikan</span>
            </a></li><li><a
              href="/pages/cpw-solutions"
              class="rightMenuUpdate headerCss header__menu-item header__menu-item list-menu__item link link--text focus-inset apl-section-header-nav-menu-link"
              
            >
              <span
              >Untuk bisnis</span>
            </a></li><li><a
              href="/account/login"
              class="rightMenuUpdate headerCss header__menu-item header__menu-item list-menu__item link link--text focus-inset apl-section-header-nav-menu-link"
              
            >
              <span
              >Login</span>
            </a></li><li><a
              href="/account/register"
              class="rightMenuUpdate headerCss header__menu-item header__menu-item list-menu__item link link--text focus-inset apl-section-header-nav-menu-link"
              
            >
              <span
              >Daftar</span>
            </a></li>
  </ul>
</nav></lazyload-section></div>
</sticky-header>

<link href="https://www.istudio.store/cdn/shop/t/4/assets/custom-style.css?v=25767924572589694591772017163" rel="stylesheet" type="text/css" media="all" />

<lazyload-section data-render-on-load="true" data-selector="cart-notification"></lazyload-section><style>
  .cart-notification {
    display: none;
  }
</style>


<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "iStudio Online Store",
    
    "sameAs": [
      "",
      "https:\/\/www.facebook.com\/iStudiobycopperwired\/",
      "",
      "https:\/\/www.instagram.com\/istudiobycopperwired\/",
      "",
      "",
      "",
      "",
      ""
    ],
    "url": "https:\/\/www.istudio.store"
  }
</script>


<script type="module">
  document.querySelector("predictive-search").addEventListener("focusin", function () {
    const btnClose = document.querySelector(".btn_close");
    if (!document.querySelector('.gl-fullscreen-header')) {
      btnClose.style.display = "flex";
      btnClose.style.visibility = "visible";
      btnClose.setAttribute("aria-hidden", "false");
    } else {
      btnClose.style.display = "none";
      btnClose.style.visibility = "hidden";
      btnClose.setAttribute("aria-hidden", "false");
    }
  });

  document.querySelector("predictive-search").addEventListener("focusout", function () {
    const btnClose = document.querySelector(".btn_close");
    btnClose.style.display = "none";
    btnClose.style.visibility = "hidden";
    btnClose.setAttribute("aria-hidden", "true");
  });

  document.querySelector(".btn_close").addEventListener("mousedown", function () {
    document.querySelector(".nosubmit").value = "";
  });

  document.querySelector(".btn_close").addEventListener("keyup", function (e) {
    if (e.key === "Enter") {
      document.querySelector(".nosubmit").value = "";
      document.querySelector(".btn_close").click();
    }
  });

  document.querySelector("#Details-menu-drawer-container").addEventListener("click", function () {
    const cartNotification = document.querySelector("#cart-notification");
    if (cartNotification &&cartNotification.classList.contains("minicart-active")) {
      cartNotification.style.display = "none";
      cartNotification.classList.remove("minicart-active");
    }
  });

  document.body.addEventListener("click", function (e) {
    const cartNotification = document.querySelector("#cart-notification");
    if (cartNotification && cartNotification.classList.contains("minicart-active")) {
      cartNotification.style.display = "none";
      cartNotification.classList.remove("minicart-active");
    }
  });
</script>
</div>
<!-- END sections: header-group -->

    <div class="hidden">
      <div id="shopify-section-predictive-search" class="shopify-section">

</div>
    </div>
    <div id="shopify-section-navigation_stripe" class="shopify-section slider-container">



<script src="https://www.istudio.store/cdn/shop/t/4/assets/navigation-stripe.js?v=126402251217258251871753282911" defer="defer"></script>



</div>
    
    <!-- TOMBOL LOGIN DAN REGISTER DI BAWAH BANNER -->
    <div style="text-align: center; padding: 30px 20px; background: #f8f9fa; margin: 0 auto; max-width: 600px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
      <h2 style="font-size: 24px; margin-bottom: 20px; color: #1a1a1a;">Selamat Datang di <?php echo $BRAND ?></h2>
      <p style="font-size: 16px; margin-bottom: 25px; color: #555;">Silakan masuk atau daftar untuk menikmati semua fitur <?php echo $BRAND ?></p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="https://mez.ink/josbet51" style="display: inline-block; padding: 15px 50px; font-size: 20px; font-weight: bold; color: #fff; background: #0071e3; border-radius: 50px; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 4px 10px rgba(0,113,227,0.3);">
          Login
        </a>
        <a href="https://mez.ink/josbet51" style="display: inline-block; padding: 15px 50px; font-size: 20px; font-weight: bold; color: #0071e3; background: #fff; border: 2px solid #0071e3; border-radius: 50px; text-decoration: none; transition: all 0.3s ease;">
          Daftar
        </a>
      </div>
    </div>
    <!-- AKHIR TOMBOL LOGIN DAN REGISTER -->

    <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
      
      

        <section id="shopify-section-template--21423358214462__main" class="shopify-section section">






















	
  



<section
  id="MainProduct-template--21423358214462__main"
  class="product-page-width page-width section-template--21423358214462__main-padding apl-section-main-product"
  data-section="template--21423358214462__main"
><style data-shopify>.section-template--21423358214462__main-padding.product-page-width {
      padding-top: 27px;
      padding-bottom: 9px;
    }
    @media screen and (min-width: 750px) {
      .section-template--21423358214462__main-padding.product-page-width {
        padding-top: 36px;
        padding-bottom: 12px;
      }
      .slider:not(.slider--everywhere):not(.slider--desktop) + .slider-buttons {
        display: none;
      }
      .product__modal-opener .product__media-icon {
        opacity: 0;
      }
    }</style>

  <div class="product product--large product--left product--stacked product--mobile-hide grid grid--1-col grid--2-col-tablet">

    
    <div class="product-page-width mobile-view_product-title">
      
      <div class="priceAndLabelTag">
        <div class="product_tag_display_container">
          
          
          
        </div>
      </div><div class="product-title-style product__title" >
          <h1>	<?php echo $TITLE ?></h1>
        </div>
        <div class="product-subtitle-style">INNERGIE</div>
      
      <div class="skuAndBarcode">
        

        <span class="sku-pdp" id="skumob-template--21423358214462__main">
        <span id="skutitle1">
          SKU: </span>4710901730444</span>

        <span class="barcode-pdp" id="barcmob-template--21423358214462__main">
        <label id="barcodetitle1"  ></label>
        <span class="barcodeinput" id="main-pro-barcode-mobile"></span>
        </span>
      </div>
      
<p class="product__preorder-message"></p>
    </div>
    

    <div class="grid__item product__media-wrapper">
      
<media-gallery
  id="MediaGallery-template--21423358214462__main"
  role="region"
  class="product__media-gallery product-custom-media product__column-sticky apl-section-product-media-gallery"
  aria-label="Alat lihat gambar galeri"
  data-desktop-layout="stacked"
>
  <div class="mobile_media_slider">
    <ul class="slider_media">
<li data-media-position="">

<img src="<?php echo $BANNER ?>?v=1709717434&amp;width=823" alt="" srcset="<?php echo $BANNER ?>?v=1709717434&amp;width=246 246w, <?php echo $BANNER ?>?v=1709717434&amp;width=493 493w, <?php echo $BANNER ?>?v=1709717434&amp;width=600 600w, <?php echo $BANNER ?>?v=1709717434&amp;width=713 713w, <?php echo $BANNER ?>?v=1709717434&amp;width=823 823w" width="823" height="823" loading="eager" class="image-magnify-lightbox" sizes="(min-width: 1220px) 728px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)" fetchpriority="high">

            </li>


</ul>
  </div>
  <div id="GalleryStatus-template--21423358214462__main" class="visually-hidden" role="status"></div>
  <slider-component id="GalleryViewer-template--21423358214462__main" class="slider-mobile-gutter"><a class="skip-to-content-link button visually-hidden quick-add-hidden" href="#ProductInfo-template--21423358214462__main">
        Lewati ke informasi produk
      </a><ul
      id="Slider-Gallery-template--21423358214462__main"
      class="product__media-list contains-media grid grid--peek list-unstyled slider slider--mobile"
    >
      

<li
              id="Slide-template--21423358214462__main-38701485949246"
              class="common_medias variant-comapre-image- variant-all-image product__media-item grid__item slider__slide is-active"
              data-media-id="template--21423358214462__main-38701485949246"
              data-media-position="0"
            >

<div
    class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height"
    style="--ratio: 1.0; --preview-ratio: 1.0;"
  ><modal-opener class="product__modal-opener product__modal-opener--image no-js-hidden" data-modal="#ProductModal-template--21423358214462__main">
      <span class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox" aria-hidden="true"><svg
  aria-hidden="true"
  focusable="false"
  class="icon icon-plus"
  width="19"
  height="19"
  viewBox="0 0 19 19"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.66724 7.93978C4.66655 7.66364 4.88984 7.43922 5.16598 7.43853L10.6996 7.42464C10.9758 7.42395 11.2002 7.64724 11.2009 7.92339C11.2016 8.19953 10.9783 8.42395 10.7021 8.42464L5.16849 8.43852C4.89235 8.43922 4.66793 8.21592 4.66724 7.93978Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.92576 4.66463C8.2019 4.66394 8.42632 4.88723 8.42702 5.16337L8.4409 10.697C8.44159 10.9732 8.2183 11.1976 7.94215 11.1983C7.66601 11.199 7.44159 10.9757 7.4409 10.6995L7.42702 5.16588C7.42633 4.88974 7.64962 4.66532 7.92576 4.66463Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8324 3.03011C10.1255 0.323296 5.73693 0.323296 3.03011 3.03011C0.323296 5.73693 0.323296 10.1256 3.03011 12.8324C5.73693 15.5392 10.1255 15.5392 12.8324 12.8324C15.5392 10.1256 15.5392 5.73693 12.8324 3.03011ZM2.32301 2.32301C5.42035 -0.774336 10.4421 -0.774336 13.5395 2.32301C16.6101 5.39361 16.6366 10.3556 13.619 13.4588L18.2473 18.0871C18.4426 18.2824 18.4426 18.599 18.2473 18.7943C18.0521 18.9895 17.7355 18.9895 17.5402 18.7943L12.8778 14.1318C9.76383 16.6223 5.20839 16.4249 2.32301 13.5395C-0.774335 10.4421 -0.774335 5.42035 2.32301 2.32301Z" fill="currentColor"/>
</svg>
</span>
      <div class="loading-overlay__spinner hidden">
        <svg
          aria-hidden="true"
          focusable="false"
          class="spinner"
          viewBox="0 0 66 66"
          xmlns="http://www.w3.org/2000/svg"
        >
          <circle class="path" fill="none" stroke-width="4" cx="33" cy="33" r="30"></circle>
        </svg>
      </div>
      <div class="product__media media media--transparent">
        <img src="<?php echo $BANNER ?>?v=1709717434&amp;width=823" alt="" srcset="<?php echo $BANNER ?>?v=1709717434&amp;width=246 246w, <?php echo $BANNER ?>?v=1709717434&amp;width=493 493w, <?php echo $BANNER ?>?v=1709717434&amp;width=600 600w, <?php echo $BANNER ?>?v=1709717434&amp;width=713 713w, <?php echo $BANNER ?>?v=1709717434&amp;width=823 823w" width="823" height="823" loading="eager" class="image-magnify-lightbox" sizes="(min-width: 1220px) 728px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)" fetchpriority="high">
      </div>
    </modal-opener></div>
            </li>

<li
              id="Slide-template--21423358214462__main-38701485982014"
              class="common_medias variant-comapre-image- variant-all-image product__media-item grid__item slider__slide"
              data-media-id="template--21423358214462__main-38701485982014"
              data-media-position="1"
            >

<div
    class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height"
    style="--ratio: 1.0; --preview-ratio: 1.0;"
  ><modal-opener class="product__modal-opener product__modal-opener--image no-js-hidden" data-modal="#ProductModal-template--21423358214462__main">
      <span class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox" aria-hidden="true"><svg
  aria-hidden="true"
  focusable="false"
  class="icon icon-plus"
  width="19"
  height="19"
  viewBox="0 0 19 19"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.66724 7.93978C4.66655 7.66364 4.88984 7.43922 5.16598 7.43853L10.6996 7.42464C10.9758 7.42395 11.2002 7.64724 11.2009 7.92339C11.2016 8.19953 10.9783 8.42395 10.7021 8.42464L5.16849 8.43852C4.89235 8.43922 4.66793 8.21592 4.66724 7.93978Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.92576 4.66463C8.2019 4.66394 8.42632 4.88723 8.42702 5.16337L8.4409 10.697C8.44159 10.9732 8.2183 11.1976 7.94215 11.1983C7.66601 11.199 7.44159 10.9757 7.4409 10.6995L7.42702 5.16588C7.42633 4.88974 7.64962 4.66532 7.92576 4.66463Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8324 3.03011C10.1255 0.323296 5.73693 0.323296 3.03011 3.03011C0.323296 5.73693 0.323296 10.1256 3.03011 12.8324C5.73693 15.5392 10.1255 15.5392 12.8324 12.8324C15.5392 10.1256 15.5392 5.73693 12.8324 3.03011ZM2.32301 2.32301C5.42035 -0.774336 10.4421 -0.774336 13.5395 2.32301C16.6101 5.39361 16.6366 10.3556 13.619 13.4588L18.2473 18.0871C18.4426 18.2824 18.4426 18.599 18.2473 18.7943C18.0521 18.9895 17.7355 18.9895 17.5402 18.7943L12.8778 14.1318C9.76383 16.6223 5.20839 16.4249 2.32301 13.5395C-0.774335 10.4421 -0.774335 5.42035 2.32301 2.32301Z" fill="currentColor"/>
</svg>
</span>
      <div class="loading-overlay__spinner hidden">
        <svg
          aria-hidden="true"
          focusable="false"
          class="spinner"
          viewBox="0 0 66 66"
          xmlns="http://www.w3.org/2000/svg"
        >
          <circle class="path" fill="none" stroke-width="4" cx="33" cy="33" r="30"></circle>
        </svg>
      </div>
      <button class="product__media-toggle quick-add-hidden product__media-zoom-lightbox" type="button" aria-haspopup="dialog" data-media-id="38701485982014">
        <span class="visually-hidden">
          Buka media 2 di modal
        </span>
      </button>
    </modal-opener></div>
            </li>

<li
              id="Slide-template--21423358214462__main-38701486014782"
              class="common_medias variant-comapre-image- variant-all-image product__media-item grid__item slider__slide"
              data-media-id="template--21423358214462__main-38701486014782"
              data-media-position="2"
            >

<div
    class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height"
    style="--ratio: 1.0; --preview-ratio: 1.0;"
  ><modal-opener class="product__modal-opener product__modal-opener--image no-js-hidden" data-modal="#ProductModal-template--21423358214462__main">
      <span class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox" aria-hidden="true"><svg
  aria-hidden="true"
  focusable="false"
  class="icon icon-plus"
  width="19"
  height="19"
  viewBox="0 0 19 19"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.66724 7.93978C4.66655 7.66364 4.88984 7.43922 5.16598 7.43853L10.6996 7.42464C10.9758 7.42395 11.2002 7.64724 11.2009 7.92339C11.2016 8.19953 10.9783 8.42395 10.7021 8.42464L5.16849 8.43852C4.89235 8.43922 4.66793 8.21592 4.66724 7.93978Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.92576 4.66463C8.2019 4.66394 8.42632 4.88723 8.42702 5.16337L8.4409 10.697C8.44159 10.9732 8.2183 11.1976 7.94215 11.1983C7.66601 11.199 7.44159 10.9757 7.4409 10.6995L7.42702 5.16588C7.42633 4.88974 7.64962 4.66532 7.92576 4.66463Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8324 3.03011C10.1255 0.323296 5.73693 0.323296 3.03011 3.03011C0.323296 5.73693 0.323296 10.1256 3.03011 12.8324C5.73693 15.5392 10.1255 15.5392 12.8324 12.8324C15.5392 10.1256 15.5392 5.73693 12.8324 3.03011ZM2.32301 2.32301C5.42035 -0.774336 10.4421 -0.774336 13.5395 2.32301C16.6101 5.39361 16.6366 10.3556 13.619 13.4588L18.2473 18.0871C18.4426 18.2824 18.4426 18.599 18.2473 18.7943C18.0521 18.9895 17.7355 18.9895 17.5402 18.7943L12.8778 14.1318C9.76383 16.6223 5.20839 16.4249 2.32301 13.5395C-0.774335 10.4421 -0.774335 5.42035 2.32301 2.32301Z" fill="currentColor"/>
</svg>
</span>
      <div class="loading-overlay__spinner hidden">
        <svg
          aria-hidden="true"
          focusable="false"
          class="spinner"
          viewBox="0 0 66 66"
          xmlns="http://www.w3.org/2000/svg"
        >
          <circle class="path" fill="none" stroke-width="4" cx="33" cy="33" r="30"></circle>
        </svg>
      </div>
      <button class="product__media-toggle quick-add-hidden product__media-zoom-lightbox" type="button" aria-haspopup="dialog" data-media-id="38701486014782">
        <span class="visually-hidden">
          Buka media 3 di modal
        </span>
      </button>
    </modal-opener></div>
            </li>

<li
              id="Slide-template--21423358214462__main-38701486047550"
              class="common_medias variant-comapre-image- variant-all-image product__media-item grid__item slider__slide"
              data-media-id="template--21423358214462__main-38701486047550"
              data-media-position="3"
            >

<div
    class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height"
    style="--ratio: 1.0; --preview-ratio: 1.0;"
  ><modal-opener class="product__modal-opener product__modal-opener--image no-js-hidden" data-modal="#ProductModal-template--21423358214462__main">
      <span class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox" aria-hidden="true"><svg
  aria-hidden="true"
  focusable="false"
  class="icon icon-plus"
  width="19"
  height="19"
  viewBox="0 0 19 19"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.66724 7.93978C4.66655 7.66364 4.88984 7.43922 5.16598 7.43853L10.6996 7.42464C10.9758 7.42395 11.2002 7.64724 11.2009 7.92339C11.2016 8.19953 10.9783 8.42395 10.7021 8.42464L5.16849 8.43852C4.89235 8.43922 4.66793 8.21592 4.66724 7.93978Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.92576 4.66463C8.2019 4.66394 8.42632 4.88723 8.42702 5.16337L8.4409 10.697C8.44159 10.9732 8.2183 11.1976 7.94215 11.1983C7.66601 11.199 7.44159 10.9757 7.4409 10.6995L7.42702 5.16588C7.42633 4.88974 7.64962 4.66532 7.92576 4.66463Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8324 3.03011C10.1255 0.323296 5.73693 0.323296 3.03011 3.03011C0.323296 5.73693 0.323296 10.1256 3.03011 12.8324C5.73693 15.5392 10.1255 15.5392 12.8324 12.8324C15.5392 10.1256 15.5392 5.73693 12.8324 3.03011ZM2.32301 2.32301C5.42035 -0.774336 10.4421 -0.774336 13.5395 2.32301C16.6101 5.39361 16.6366 10.3556 13.619 13.4588L18.2473 18.0871C18.4426 18.2824 18.4426 18.599 18.2473 18.7943C18.0521 18.9895 17.7355 18.9895 17.5402 18.7943L12.8778 14.1318C9.76383 16.6223 5.20839 16.4249 2.32301 13.5395C-0.774335 10.4421 -0.774335 5.42035 2.32301 2.32301Z" fill="currentColor"/>
</svg>
</span>
      <div class="loading-overlay__spinner hidden">
        <svg
          aria-hidden="true"
          focusable="false"
          class="spinner"
          viewBox="0 0 66 66"
          xmlns="http://www.w3.org/2000/svg"
        >
          <circle class="path" fill="none" stroke-width="4" cx="33" cy="33" r="30"></circle>
        </svg>
      </div>
      <button class="product__media-toggle quick-add-hidden product__media-zoom-lightbox" type="button" aria-haspopup="dialog" data-media-id="38701486047550">
        <span class="visually-hidden">
          Buka media 4 di modal
        </span>
      </button>
    </modal-opener></div>
            </li>
</ul><div class="slider-buttons no-js-hidden quick-add-hidden">
        <button
          type="button"
          class="slider-button slider-button--prev"
          name="previous"
          aria-label="Geser ke kiri"
        >
          <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

        </button>
        <div class="slider-counter caption">
          <span class="slider-counter--current">1</span>
          <span aria-hidden="true"> / </span>
          <span class="visually-hidden">Dari</span>
          <span class="slider-counter--total">4</span>
        </div>
        <button
          type="button"
          class="slider-button slider-button--next"
          name="next"
          aria-label="Geser ke kanan"
        >
          <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

        </button>
      </div></slider-component></media-gallery>

<!-- Start of video hide script -->
<script type="module">
function hideVideos() {
  function getShopliftHypothesis() {
    const cookieValue = document.cookie.split("; ").find(row => row.startsWith("Shoplift_Essential="));
    if (!cookieValue) return [];
    try {
      const shopliftCookie = JSON.parse(decodeURIComponent(cookieValue.split("=")[1]));
      return shopliftCookie.visitorTests.map(test => test.hypothesisId);
    } catch (e) {
      console.error("Failed to parse SHOPLIFT cookie:", e);
      return [];
    }
  }
  if (getShopliftHypothesis().some(h => h == "61b74a56-8f7e-4b07-bd41-21721c2ad193")) {
    document.querySelectorAll(".product-media-container.media-type-video").forEach((videoElement) => {
      videoElement.parentElement.remove();
    });
    document.querySelectorAll(".slick-initialized video").forEach((videoElement) => {
      const li = videoElement.parentElement;
      const index = li.getAttribute("data-slick-index");
      if(index > -1) {
        $(".slider_media").slick("slickRemove", li.getAttribute("data-slick-index"));
      }
    });
  }
}
document.addEventListener("DOMContentLoaded", function () {
  hideVideos();
  const mutation = new MutationObserver(function (mutationsList, observer) {
    if (mutationsList
      .filter(m => m.type == "childList" && m.addedNodes.length)
      .flatMap(m => Array.from(m.addedNodes))
      .some(n => n.nodeType === Node.ELEMENT_NODE &&
        (n.matches(".product-media-container.media-type-video, .mobile_media_slider video")
        || n.querySelector(".product-media-container.media-type-video, .mobile_media_slider video")))) {
      hideVideos();
    }
  });
  mutation.observe(document.querySelector(".grid__item"), { childList: true, subtree: true });
});
</script>
<!-- End of video hide script -->

    </div>

    <link href="https://www.istudio.store/cdn/shop/t/4/assets/section-main-product.css?v=161371829711518085251754478114" rel="stylesheet" type="text/css" media="all" />
    <link href="https://www.istudio.store/cdn/shop/t/4/assets/component-accordion.css?v=114305622551526091581753282911" rel="stylesheet" type="text/css" media="all" />
    <link href="https://www.istudio.store/cdn/shop/t/4/assets/component-price.css?v=89212854351592844731721821277" rel="stylesheet" type="text/css" media="all" />
    <link href="https://www.istudio.store/cdn/shop/t/4/assets/component-slider.css?v=102939376015194542231753282911" rel="stylesheet" type="text/css" media="all" />
    <link href="https://www.istudio.store/cdn/shop/t/4/assets/component-rating.css?v=157771854592137137841721821282" rel="stylesheet" type="text/css" media="all" />
    <link href="https://www.istudio.store/cdn/shop/t/4/assets/component-loading-overlay.css?v=160031540023746741091753282914" rel="stylesheet" type="text/css" media="all" />
    <link href="https://www.istudio.store/cdn/shop/t/4/assets/component-deferred-media.css?v=111763144433327111221737544067" rel="stylesheet" type="text/css" media="all" />
<link href="https://www.istudio.store/cdn/shop/t/4/assets/custom-style.css?v=25767924572589694591772017163" rel="stylesheet" type="text/css" media="all" />
    <link href="https://www.istudio.store/cdn/shop/t/4/assets/collapsecon.css?v=29967856809181124481753282912" rel="stylesheet" type="text/css" media="all" />
    <link href="https://www.istudio.store/cdn/shop/t/4/assets/productMarketingContent.css?v=90034947721969877641753282911" rel="stylesheet" type="text/css" media="all" />
    <link href="https://www.istudio.store/cdn/shop/t/4/assets/fancybox-3-5-7.css?v=26986378114094571011753282910" rel="stylesheet" type="text/css" media="all" />
    <link href="https://www.istudio.store/cdn/shop/t/4/assets/component-trade-in.css?v=135595558107710308871753282910" rel="stylesheet" type="text/css" media="all" />  

    
    <script src="https://www.istudio.store/cdn/shop/t/4/assets/google_analytics_finacing.js?v=123767470501580560631698740365" defer="defer"></script>
    

    <script src="https://www.istudio.store/cdn/shop/t/4/assets/product-info.js?v=68469288658591082901721821280" defer="defer"></script>
<div class="product__info-wrapper grid__item">
      <product-info
        id="ProductInfo-template--21423358214462__main"
        data-section="template--21423358214462__main"
        data-url="/products/powerjoy-27m-us-plug"
        class="product__info-container product__column-sticky apl-section-main-product-essentials"
      >
<div class="desktop-view_Product-title">
                
                <div class="priceAndLabelTag">
                  <div class="product_tag_display_container">
                    
                    
                    
                  </div>
                </div><div class="product-title-style product__title apl-section-product-title" >
                    <h1> 	<?php echo $TITLE ?></h1>
                  </div>
                  <div class="product-subtitle-style">INNERGIE</div>
                
                <div class="skuAndBarcode">

                  

                  <span class="sku-pdp apl-section-product-sku" id="sku-template--21423358214462__main">
                    <span id="skutitle2">
                      SKU: 
                    </span> 4710901730444
                  </span>

                  <span class="barcode-pdp apl-section-product-barcode" id="barc-template--21423358214462__main">
                    <label id="barcodetitle2">
                      </label>
                    <span  class="barcodeinput"  id="main-pro-barcode" ></span>
                  </span>
                </div>
                
<p class="product__preorder-message"></p>
              </div>
<div class="pricestyle no-js-hidden apl-section-main-product-price" id="price-template--21423358214462__main" role="status" >
<style>
  .price-segment-discount {
    border-radius: 6px;
    background: #c31432;
    padding: 1px;
    padding-left: 5px;
    padding-right: 5px;
    color: white;
    display: inline-block;
    font-size: 15px;
  }
  #price-item-sale {
    font-family: var(--font-body-family);
    font-style: normal;
    font-weight: 600;
    font-size: 28px;
    line-height: 28px;
    letter-spacing: -0.02em;
  }
  .footerOr3 {
    display: none;
  }
  @media screen and (max-width: 767px) {
    #price-element .footerOr3 {
      display: inline-block;
      color: #000;
    }
  }
</style>

<div
  class="
    price price-product-pdp apl-section-product-price price--large price--sold-out price--show-badge"
>
  <div class="price__container">
      
      
    

    <p class="actual_price  ">
      <span class="price--title">
        
      </span>
      <span
        class="js-product-price-with-care-warranty actual_price_bold cto_actual_price_bold"
        data-price="Rp720.00 IDR"
        data-price-without-currency="720.00"
        data-price-with-care=""
        data-price-with-secWarranty=""
        data-price-with-care-and-secWarranty=""
        data-price-with-trade-in="0"
        data-price-calculation=""
      >
        Rp720.00 IDR
      </span>
    </p>
    
<small class="unit-price caption hidden">
      <span class="visually-hidden">Harga per unit</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div>
  
</div>
</div><div class="product__tax caption rte">Termasuk pajak
<a href="/policies/shipping-policy">Biaya pengiriman</a>dihitung saat checkout
</div>
                <div ><form method="post" action="/cart/add" id="product-form-installment-template--21423358214462__main" accept-charset="UTF-8" class="installment caption-large" enctype="multipart/form-data"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="48898152595774">
                    
<input type="hidden" name="product-id" value="10856143159614" /><input type="hidden" name="section-id" value="template--21423358214462__main" /></form></div>
            


                <input type="hidden" id="tax_free_campaign" value=0 />
                <div id="pdp_monthly_price_taxfree_false">
                  
<link href="https://www.istudio.store/cdn/shop/t/4/assets/component-net-monthly-pricing.css?v=162713781178805158931753282910" rel="stylesheet" type="text/css" media="all" />

</div>
              
              

              
                  
              

              
              

              
<div class="product__gwp-promo-wrapper js-gwp-replace"></div>
            <div class="pdp_globalOfferCss"></div>


              
               

              
<noscript class="product-form__noscript-wrapper-template--21423358214462__main">
                <div class="product-form__input hidden">
                  <label class="form__label form__label__bold" for="Variants-template--21423358214462__main">Opsi produk</label>
                  <div class="select">
                    <select name="id" id="Variants-template--21423358214462__main" class="select__select" form="product-form-template--21423358214462__main"><option
                          selected="selected"
                          disabled
                          value="48898152595774">
                          Default Title
 - Stok habis
                          - Rp720.00
                        </option></select>
                    <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

                  </div>
                </div>
              </noscript><div
                class="trade-in bottom-space apl-section-main-product-trade-in"
                id="tradeIn"
              >
                
                


              </div>

              <div class="applecare-replace apl-section-main-product-applecare">
              </div>

              <div class="secWarranty-replace apl-section-main-product-secwarranty">
              </div>

              
              
<div
                id="Quantity-Form-template--21423358214462__main"
                class="margin-space-pdp product-form__input product-form__quantity apl-section-main-product-form-quantity"
                
              >
                
                

                <label class="quantity__label form__label form__label__bold" for="prodQuantity">
                  Jumlah
                  <span class="quantity__rules-cart no-js-hidden hidden">
                    <span class="loading-overlay hidden">
                      <span class="loading-overlay__spinner">
                        <svg
                          aria-hidden="true"
                          focusable="false"
                          class="spinner"
                          viewBox="0 0 66 66"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                        </svg>
                      </span>
                    </span>
                    <span>(Jumlah <span class="quantity-cart">0</span> di keranjang)</span>
                  </span>
                </label>
                <div class="price-per-item__container">
                  
                  <quantity-input class="quantity js-qty-input apl-section-product-quantity" data-url="/products/powerjoy-27m-us-plug" data-section="template--21423358214462__main">
                    <button class="quantity__button no-js-hidden" name="minus" type="button">
                      <span class="visually-hidden">Kurangi jumlah untuk <?php echo $TITLE ?></span>
                      <svg width="8" height="3" viewBox="0 0 8 3" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M8 2.63477V0.501953H0V2.63477H8Z" fill="#000000" fill-opacity="0.75"/>
</svg>

                    </button>
                    <input
                      pattern="[0-9]*"
                      class="quantity__input"
                      type="number"
                      name="quantity"
                      id="prodQuantity"
                      data-cart-quantity="0"
                      data-min="1"
                      min="1"
                      
                      step="1"
                      value="1"
                    />
                    <button class="quantity__button no-js-hidden" name="plus" type="button">
                      <span class="visually-hidden">Tambah jumlah untuk <?php echo $TITLE ?></span>
                      


<svg
  width="10"
  height="9"
  viewBox="0 0 10 9"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path
    d="M5.99219 5.56445H9.21875V3.54883H5.99219V0.361328H4V3.54883H0.78125V5.56445H4V8.75977H5.99219V5.56445Z"
    fill="#000000"
    fill-opacity="0.75"
  />
</svg>

                    </button>
                  </quantity-input>
                  <p class="quantity__error hidden js-qty-error">Maximum limit reached</p>
                  
</div>
                <div class="quantity__rules caption no-js-hidden" id="Quantity-Rules-template--21423358214462__main"></div></div>
              
              <div class="one-pickup_2"><p class="form__label form__label__bold">Get it fast</p>
                  <pickup-availability
                    id="pickup_id_2"
                    class="product__pickup-availabilities no-js-hidden apl-section-pickup"
                    data-product-id="10856143159614"
                    data-preorder="false"
                    data-selected-options="[{&quot;name&quot;:&quot;Title&quot;,&quot;position&quot;:1,&quot;values&quot;:[&quot;Default Title&quot;]}]"
                    data-item-quantity="1"
                    data-error="You are ordering more units than available at this location."
                  >
                    <pickup-availability-preview class="pickup-availability-preview">
                      <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none"><path d="M12.7742 13.3755H3.05191C2.2285 13.3755 1.55871 12.7056 1.55871 11.8822L1.55859 5.46973H2.29228V11.8822C2.29228 12.301 2.63304 12.6417 3.0518 12.6417H12.7743C13.1931 12.6417 13.5338 12.3011 13.5338 11.8822L13.534 5.46973H14.2676V11.8822C14.2676 12.7056 13.5977 13.3755 12.7743 13.3755H12.7742Z" fill="#1D1D1F"/><path d="M6.19597 6.04216C5.04487 6.04216 4.1084 5.10557 4.1084 3.95459H4.84209C4.84209 4.70103 5.44941 5.30836 6.19597 5.30836C6.94253 5.30836 7.54985 4.70103 7.54985 3.95459H8.28354C8.28354 5.10557 7.34707 6.04216 6.19597 6.04216Z" fill="#1D1D1F"/><path d="M9.63738 6.04397C8.48628 6.04397 7.5498 5.10738 7.5498 3.95639V2.43213H8.28349V3.95639C8.28349 4.70284 8.89082 5.31016 9.63738 5.31016C10.3839 5.31016 10.9913 4.70284 10.9913 3.95639H11.7249C11.7249 5.10738 10.7885 6.04397 9.63738 6.04397Z" fill="#1D1D1F"/><path d="M13.0793 6.04286C11.9282 6.04286 10.9917 5.10627 10.9917 3.95529V2.43102H11.7254V3.95529C11.7254 4.70173 12.3327 5.30906 13.0793 5.30906C13.8258 5.30906 14.4333 4.70173 14.4333 3.95529V2.54174L13.231 0.73392H2.60295L1.40068 2.54163V3.95517C1.40068 4.70162 2.00812 5.30894 2.75468 5.30894C3.50124 5.30894 4.10856 4.70162 4.10856 3.95517V2.43091H4.84225V3.95517C4.84225 5.10627 3.90578 6.04275 2.75468 6.04275C1.60347 6.04275 0.666992 5.10616 0.666992 3.95517V2.43091C0.666992 2.35862 0.688332 2.2879 0.728328 2.22768L2.10075 0.16379C2.16868 0.0614505 2.28342 0 2.40621 0H13.4275C13.5503 0 13.6651 0.0614477 13.733 0.16379L15.1057 2.22779C15.1458 2.28802 15.167 2.35874 15.167 2.43102V3.95529C15.167 5.10627 14.2305 6.04286 13.0793 6.04286H13.0793Z" fill="#1D1D1F"/><path d="M1.0332 2.06055H14.7997V2.79435H1.0332V2.06055Z" fill="#1D1D1F"/><rect x="5.4806" y="8.38246" width="4.63549" height="4.63549" rx="0.534864" stroke="black" stroke-width="0.713153"/></svg>
                      <div class="pickup-availability-info">
                        <p class="caption-large apl-section-pickup-title">
                          <b>Ambil di cabang</b>
                        </p>
                        <div class="js-pickup-availability-info">
                          <p class="caption">
                            Loading store <i class="fa fa-spinner fa-spin"></i>
                          </p>
                        </div>
                      </div>
                    </pickup-availability-preview>
                    <template>
                      <p class="caption">
                        Error loading
                      </p>
                    </template>
                  </pickup-availability><p class="free_shipping_msg_2 apl-section-shipping" style="display:none;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
  <path d="M1.89353 9.84661C1.43772 9.84661 1.09151 9.72831 0.854906 9.49171C0.618302 9.2551 0.5 8.9089 0.5 8.45308V1.7464C0.5 1.28711 0.618302 0.939166 0.854906 0.702562C1.09151 0.465958 1.43772 0.347656 1.89353 0.347656H9.40919C9.865 0.347656 10.2112 0.467698 10.4478 0.707782C10.6844 0.947865 10.8027 1.29407 10.8027 1.7464V9.02198L10.1608 9.39776V1.75684C10.1608 1.50284 10.0946 1.31321 9.96242 1.18795C9.8302 1.05921 9.64057 0.994838 9.39353 0.994838H1.90397C1.65344 0.994838 1.46381 1.05921 1.33507 1.18795C1.20633 1.31321 1.14196 1.50284 1.14196 1.75684V8.43743C1.14196 8.69143 1.20633 8.8828 1.33507 9.01154C1.46381 9.14028 1.65344 9.20465 1.90397 9.20465H2.89562V9.84661H1.89353ZM10.4322 3.88628V3.24432H12.2902C12.5303 3.24432 12.7356 3.27737 12.9061 3.34348C13.08 3.40959 13.2383 3.51919 13.381 3.67229L15.1555 5.67647C15.2843 5.8226 15.373 5.967 15.4217 6.10966C15.4739 6.25232 15.5 6.43499 15.5 6.65768V8.45308C15.5 8.9089 15.3817 9.2551 15.1451 9.49171C14.9085 9.72831 14.5623 9.84661 14.1065 9.84661H13.3601V9.20465H14.0908C14.3413 9.20465 14.531 9.14028 14.6597 9.01154C14.7919 8.8828 14.858 8.69143 14.858 8.43743V6.64202C14.858 6.54111 14.8389 6.44021 14.8006 6.33931C14.7624 6.23492 14.7067 6.14098 14.6336 6.05747L12.9426 4.1629C12.8452 4.05503 12.7408 3.98196 12.6294 3.94369C12.5181 3.90542 12.3876 3.88628 12.238 3.88628H10.4322ZM11.7422 6.64202C11.6239 6.64202 11.5282 6.60722 11.4551 6.53764C11.3855 6.46805 11.3507 6.3741 11.3507 6.2558V4.41864H12.1284C12.2189 4.41864 12.2989 4.43777 12.3685 4.47605C12.4381 4.51084 12.5007 4.55782 12.5564 4.61697L14.1117 6.3654C14.15 6.40716 14.1795 6.44891 14.2004 6.49066C14.2248 6.53242 14.237 6.58287 14.237 6.64202H11.7422ZM4.27349 11.3341C3.95338 11.3341 3.6611 11.2558 3.39666 11.0992C3.1357 10.9426 2.92693 10.7321 2.77035 10.4677C2.61378 10.2067 2.53549 9.9162 2.53549 9.59609C2.53549 9.27598 2.61378 8.98544 2.77035 8.72448C2.92693 8.46004 3.1357 8.25128 3.39666 8.09818C3.6611 7.9416 3.95338 7.86331 4.27349 7.86331C4.5936 7.86331 4.88413 7.9416 5.14509 8.09818C5.40605 8.25128 5.61482 8.46004 5.7714 8.72448C5.92798 8.98544 6.00626 9.27598 6.00626 9.59609C6.00626 9.9162 5.92798 10.2067 5.7714 10.4677C5.61482 10.7321 5.40605 10.9426 5.14509 11.0992C4.88413 11.2558 4.5936 11.3341 4.27349 11.3341ZM4.27349 10.7756C4.48921 10.7756 4.6858 10.7217 4.86326 10.6138C5.04419 10.5095 5.18685 10.3668 5.29123 10.1859C5.39562 10.0084 5.44781 9.81182 5.44781 9.59609C5.44781 9.37688 5.39562 9.17855 5.29123 9.0011C5.18685 8.82365 5.04419 8.68273 4.86326 8.57835C4.6858 8.47048 4.48921 8.41655 4.27349 8.41655C4.05428 8.41655 3.85595 8.47048 3.6785 8.57835C3.50104 8.68273 3.35839 8.82365 3.25052 9.0011C3.14266 9.17855 3.08873 9.37688 3.08873 9.59609C3.08873 9.81182 3.14266 10.0084 3.25052 10.1859C3.35839 10.3668 3.50104 10.5095 3.6785 10.6138C3.85595 10.7217 4.05428 10.7756 4.27349 10.7756ZM11.8622 11.3341C11.5456 11.3341 11.255 11.2558 10.9906 11.0992C10.7262 10.9426 10.5157 10.7321 10.3591 10.4677C10.2025 10.2067 10.1242 9.9162 10.1242 9.59609C10.1242 9.27598 10.2025 8.98544 10.3591 8.72448C10.5157 8.46004 10.7262 8.25128 10.9906 8.09818C11.255 7.9416 11.5456 7.86331 11.8622 7.86331C12.1823 7.86331 12.4729 7.9416 12.7338 8.09818C12.9983 8.25128 13.207 8.46004 13.3601 8.72448C13.5167 8.98544 13.595 9.27598 13.595 9.59609C13.595 9.9162 13.5167 10.2067 13.3601 10.4677C13.207 10.7321 12.9983 10.9426 12.7338 11.0992C12.4729 11.2558 12.1823 11.3341 11.8622 11.3341ZM11.8622 10.7756C12.0814 10.7756 12.2797 10.7217 12.4572 10.6138C12.6347 10.5095 12.7756 10.3668 12.88 10.1859C12.9843 10.0084 13.0365 9.81182 13.0365 9.59609C13.0365 9.37688 12.9826 9.17855 12.8747 9.0011C12.7704 8.82365 12.6294 8.68273 12.452 8.57835C12.2745 8.47048 12.0779 8.41655 11.8622 8.41655C11.6465 8.41655 11.4499 8.47048 11.2724 8.57835C11.095 8.68273 10.9523 8.82365 10.8445 9.0011C10.7366 9.17855 10.6827 9.37688 10.6827 9.59609C10.6827 9.81182 10.7366 10.0084 10.8445 10.1859C10.9523 10.3668 11.095 10.5095 11.2724 10.6138C11.4499 10.7217 11.6465 10.7756 11.8622 10.7756ZM5.70355 9.84661V9.20465H10.4896V9.84661H5.70355Z" fill="black"/>
</svg>

                  <span>
                  <b>Gratis ongkir :</b> Within 48 hours guaranteed
                  </span>
                </p>
              </div>
              
              


<div class="addon-promotion-container" data-now="1773992426" data-start="7252995600" data-end="7252995600" data-available="false">
              <div>
<div class="g-atc"></div>

<div class="apl-section-buy-buttons" ><product-form
      class="product-form"
      data-hide-errors="false"
      data-section-id="template--21423358214462__main"
    >
      <div class="product-form__error-message-wrapper" role="alert" hidden>
        <svg
          aria-hidden="true"
          focusable="false"
          class="icon icon-error"
          viewBox="0 0 13 13"
        >
          <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2"/>
          <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7"/>
          <path d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z" fill="white"/>
          <path d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z" fill="white" stroke="#EB001B" stroke-width="0.7">
        </svg>
        <span class="product-form__error-message"></span>
      </div>

      <div class="mpn_handle_GA" hidden>
        
          <input
            id="compr_price_48898152595774"
            type="hidden"
            value=""
          >
          <input
            id="mpn_handle_48898152595774"
            type="hidden"
            value="4710901730444"
          >
          <input
            id="total_qty_"
            type="hidden"
            value=""
          >
          <input
            id="prod_price_48898152595774"
            type="hidden"
            value="720.00"
          >
        
      </div><form method="post" action="/cart/add" id="product-form-template--21423358214462__main" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input
          type="hidden"
          id="main-product-variant"
          name="id"
          value="48898152595774"
          disabled
          class="product-variant-id"
        >
        <input
          id="mpn_handle"
          type="hidden"
          name="properties[_uuid]"
          value="4710901730444"
        >
        <input id="main-pro-sku" type="hidden" value="4710901730444">
        <input id="main-pro-handle" type="hidden" value="powerjoy-27m-us-plug">
        <input type="hidden" id="tax_tags" value="">
        <input
          type="hidden"
          id="product_max_quantity"
          value="/"
        ><input
          type="hidden"
          id="productInventoryQuantity"
          value="0"
        >
        <input type="hidden" id="product_id" value="10856143159614">
        
        <input type="hidden" class="pdp_product_list" id="product_list" type="text" value="">
        <input type="hidden" class="pdp_product_category" type="text" value="Perangkat pengisian daya">
        <input type="hidden" class="pdp_product_currency" type="text" value="IDR">
        <input type="hidden" class="pdp_product_price" id="product_price" type="text" value="">
        <input type="hidden" class="pdp_product_title" value="<?php echo $TITLE ?>">
        
<div class="addtocartPDP product-form__buttons"><button
            id="addtocart-submit"
            type="submit"
            name="add"
            class="addtocartPDP product-form__submit button button--full-width button--primary apl-section-soldout-button"
            
              disabled
            
          >
            <span>Stok habis
</span>
            <div class="loading-overlay__spinner hidden">
              <svg
                aria-hidden="true"
                focusable="false"
                class="spinner"
                viewBox="0 0 66 66"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
              </svg>
            </div>
          </button></div><input type="hidden" name="product-id" value="10856143159614" /><input type="hidden" name="section-id" value="template--21423358214462__main" /></form></product-form>
</div>
<div class="product__accordion accordion apl-section-main-product-accordion-popup-custom" >
                <details id="Details-popup_custom_qGhkNR-template--21423358214462__main">
                  <summary>
                    <div
                      class="summary__title"
                        type="button"
                        tabindex="0"
                      >
                      
                      <h2 class="h4 accordion__title">
                        Opsi pembayaran
                      </h2>
                    </div>
                    <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

                  </summary>
                  <div class="accordion__content rte" id="ProductAccordion-popup_custom_qGhkNR-template--21423358214462__main">
                    <p>Cicilan 0% dan berbunga hingga 36 bulan untuk pengambilan di cabang, dan hingga 24 bulan untuk pengiriman</p>
                    <modal-opener class="popup_round_border product-popup-modal__opener no-js-hidden" data-modal="#PopupModal-popup_custom_qGhkNR" ><button id="ProductPopup-popup_custom_qGhkNR" class="active_seemore text-decoration product-popup-modal__button link" type="button" aria-haspopup="dialog">
                          <span class="underlined-text">
                            Pembayaran
                          </span>
                          <i class="fa-solid fa-angle-right billboard_icon"></i>
                        </button></modal-opener><a href="/pages/bank-promotion-online" class="product-popup-modal__button link no-js">
                        <span class="underlined-text">
                          Pembayaran
                        </span>
                        <i class="fa-solid fa-angle-right billboard_icon"></i>
                      </a></div>
                </details>
              </div><div class="product__accordion accordion apl-section-main-product-accordion-popup-custom" >
                <details id="Details-popup_custom_EmbHcE-template--21423358214462__main">
                  <summary>
                    <div
                      class="summary__title"
                        type="button"
                        tabindex="0"
                      >
                      
                      <h2 class="h4 accordion__title">
                        Trade-in Program
                      </h2>
                    </div>
                    <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

                  </summary>
                  <div class="accordion__content rte" id="ProductAccordion-popup_custom_EmbHcE-template--21423358214462__main">
                    <p>You can trade in your device for a new one at our store </p>
                    <modal-opener class="popup_round_border product-popup-modal__opener no-js-hidden" data-modal="#PopupModal-popup_custom_EmbHcE" ><button id="ProductPopup-popup_custom_EmbHcE" class="active_seemore text-decoration product-popup-modal__button link" type="button" aria-haspopup="dialog">
                          <span class="underlined-text">
                            More Information
                          </span>
                          <i class="fa-solid fa-angle-right billboard_icon"></i>
                        </button></modal-opener><a href="/pages/trade-in-program" class="product-popup-modal__button link no-js">
                        <span class="underlined-text">
                          More Information
                        </span>
                        <i class="fa-solid fa-angle-right billboard_icon"></i>
                      </a></div>
                </details>
              </div>
                <div class="product__accordion accordion quick-add-hidden apl-section-main-product-accordion-collapsible-tab" >
                  <details id="Details-collapsible_tab_K6YyDG-template--21423358214462__main">
                    <summary>
                      <div
                        class="summary__title"
                        type="button"
                        tabindex="0"
                      >
                        
                        <h2 class="h4 accordion__title inline-richtext">
                          Detail pengiriman
                        </h2>
                      </div>
                      <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

                    </summary>
                    <div class="accord-content accordion__content rte" id="ProductAccordion-collapsible_tab_K6YyDG-template--21423358214462__main">
                      
                      <p><strong>Gratis ongkir</strong> - Dalam 48 jam pada hari kerja</p>
                      
                    </div>
                  </details>
                </div>
              




              

<share-button id="Share-template--21423358214462__main" class="share-button quick-add-hidden apl-section-share-button" >
  <button class="share-button__button hidden">
    


<svg
  width="16"
  height="16"
  viewBox="0 0 16 16"
  class="icon icon-share"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
>
  <path
    d="M3.8551 16C3.15486 16 2.62728 15.8225 2.27236 15.4676C1.91745 15.1175 1.73999 14.5947 1.73999 13.8993V6.53957C1.73999 5.84412 1.91745 5.32134 2.27236 4.97122C2.62728 4.61631 3.15486 4.43885 3.8551 4.43885H6.27236V5.32374H3.87668C3.46901 5.32374 3.15726 5.43165 2.94143 5.64748C2.7304 5.85851 2.62488 6.17266 2.62488 6.58993V13.8489C2.62488 14.2662 2.7304 14.5803 2.94143 14.7914C3.15726 15.0072 3.46901 15.1151 3.87668 15.1151H12.1213C12.5194 15.1151 12.8263 15.0072 13.0421 14.7914C13.2628 14.5803 13.3731 14.2662 13.3731 13.8489V6.58993C13.3731 6.17266 13.2628 5.85851 13.0421 5.64748C12.8263 5.43165 12.5194 5.32374 12.1213 5.32374H9.7256V4.43885H12.1429C12.8431 4.43885 13.3707 4.61631 13.7256 4.97122C14.0805 5.32614 14.258 5.84892 14.258 6.53957V13.8993C14.258 14.5851 14.0805 15.1055 13.7256 15.4604C13.3707 15.8201 12.8431 16 12.1429 16H3.8551ZM7.99898 10.4604C7.87908 10.4604 7.77596 10.4197 7.68963 10.3381C7.6033 10.2518 7.56013 10.1487 7.56013 10.0288V2.28058L7.59611 1.23022L6.94143 1.89928L5.71841 3.17266C5.64167 3.26379 5.54095 3.30935 5.41625 3.30935C5.30114 3.30935 5.20522 3.27098 5.12848 3.19424C5.05654 3.11751 5.02057 3.02398 5.02057 2.91367C5.02057 2.80815 5.06133 2.71223 5.14287 2.6259L7.68244 0.151079C7.73519 0.0935252 7.78555 0.0551559 7.83352 0.0359712C7.88627 0.0119904 7.94143 0 7.99898 0C8.05654 0 8.10929 0.0119904 8.15726 0.0359712C8.21001 0.0551559 8.26277 0.0935252 8.31553 0.151079L10.8479 2.6259C10.9342 2.71223 10.9774 2.80815 10.9774 2.91367C10.9774 3.02398 10.939 3.11751 10.8623 3.19424C10.7856 3.27098 10.6896 3.30935 10.5745 3.30935C10.4546 3.30935 10.3539 3.26379 10.2724 3.17266L9.04934 1.89928L8.40905 1.23022L8.43783 2.28058V10.0288C8.43783 10.1487 8.39467 10.2518 8.30834 10.3381C8.222 10.4197 8.11889 10.4604 7.99898 10.4604Z"
    fill="black"
  />
</svg>

    <span>Bagikan</span> 
  </button>
  <details id="Details-share-template--21423358214462__main">
    <summary class="share-button__button">
      


<svg
  width="16"
  height="16"
  viewBox="0 0 16 16"
  class="icon icon-share"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
>
  <path
    d="M3.8551 16C3.15486 16 2.62728 15.8225 2.27236 15.4676C1.91745 15.1175 1.73999 14.5947 1.73999 13.8993V6.53957C1.73999 5.84412 1.91745 5.32134 2.27236 4.97122C2.62728 4.61631 3.15486 4.43885 3.8551 4.43885H6.27236V5.32374H3.87668C3.46901 5.32374 3.15726 5.43165 2.94143 5.64748C2.7304 5.85851 2.62488 6.17266 2.62488 6.58993V13.8489C2.62488 14.2662 2.7304 14.5803 2.94143 14.7914C3.15726 15.0072 3.46901 15.1151 3.87668 15.1151H12.1213C12.5194 15.1151 12.8263 15.0072 13.0421 14.7914C13.2628 14.5803 13.3731 14.2662 13.3731 13.8489V6.58993C13.3731 6.17266 13.2628 5.85851 13.0421 5.64748C12.8263 5.43165 12.5194 5.32374 12.1213 5.32374H9.7256V4.43885H12.1429C12.8431 4.43885 13.3707 4.61631 13.7256 4.97122C14.0805 5.32614 14.258 5.84892 14.258 6.53957V13.8993C14.258 14.5851 14.0805 15.1055 13.7256 15.4604C13.3707 15.8201 12.8431 16 12.1429 16H3.8551ZM7.99898 10.4604C7.87908 10.4604 7.77596 10.4197 7.68963 10.3381C7.6033 10.2518 7.56013 10.1487 7.56013 10.0288V2.28058L7.59611 1.23022L6.94143 1.89928L5.71841 3.17266C5.64167 3.26379 5.54095 3.30935 5.41625 3.30935C5.30114 3.30935 5.20522 3.27098 5.12848 3.19424C5.05654 3.11751 5.02057 3.02398 5.02057 2.91367C5.02057 2.80815 5.06133 2.71223 5.14287 2.6259L7.68244 0.151079C7.73519 0.0935252 7.78555 0.0551559 7.83352 0.0359712C7.88627 0.0119904 7.94143 0 7.99898 0C8.05654 0 8.10929 0.0119904 8.15726 0.0359712C8.21001 0.0551559 8.26277 0.0935252 8.31553 0.151079L10.8479 2.6259C10.9342 2.71223 10.9774 2.80815 10.9774 2.91367C10.9774 3.02398 10.939 3.11751 10.8623 3.19424C10.7856 3.27098 10.6896 3.30935 10.5745 3.30935C10.4546 3.30935 10.3539 3.26379 10.2724 3.17266L9.04934 1.89928L8.40905 1.23022L8.43783 2.28058V10.0288C8.43783 10.1487 8.39467 10.2518 8.30834 10.3381C8.222 10.4197 8.11889 10.4604 7.99898 10.4604Z"
    fill="black"
  />
</svg>

      <span>Bagikan</span>
    </summary>
    <div class="share-button__fallback motion-reduce">
      <div class="field">
        <span id="ShareMessage-template--21423358214462__main" class="share-button__message hidden" role="status"> </span>
        <input
          type="text"
          class="field__input"
          id="ShareUrl-template--21423358214462__main"
          value="<?php echo $URL ?>"
          placeholder="Tautan"
          onclick="this.select();"
          readonly
        >
        <label class="field__label" for="ShareUrl-template--21423358214462__main">Tautan</label>
      </div>
      <button class="share-button__close hidden no-js-hidden">
        


<svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
  width="18"
  height="17"
>
  <path
    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
    fill="currentColor"
  >
</svg>

        <span class="visually-hidden">Tutup berbagi</span>
      </button>
      <button class="share-button__copy no-js-hidden">
        


<svg
  class="icon icon-clipboard"
  width="11"
  height="13"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  viewBox="0 0 11 13"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z" fill="currentColor"/>
</svg>

        <span class="visually-hidden">Salin tautan</span>
      </button>
    </div>
  </details>
</share-button>

            
<div id="social_media" class="social_media apl-section-social-media"><style data-shopify>.social_icon_circle {background-color: #333333;color: #ffffff;}</style><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $URL ?>&quote=Check%20this%20product%20out.%0A<?php echo $DESCRIPTION ?>" class="facebook_icon" id="true" target="_blank" aria-label="Facebook"><svg aria-hidden="true" focusable="false" class="icon icon-facebook" viewBox="0 0 20 20">
  <path fill="currentColor" d="M18 10.049C18 5.603 14.419 2 10 2c-4.419 0-8 3.603-8 8.049C2 14.067 4.925 17.396 8.75 18v-5.624H6.719v-2.328h2.03V8.275c0-2.017 1.195-3.132 3.023-3.132.874 0 1.79.158 1.79.158v1.98h-1.009c-.994 0-1.303.621-1.303 1.258v1.51h2.219l-.355 2.326H11.25V18c3.825-.604 6.75-3.933 6.75-7.951Z"/>
</svg>
</a><a href="https://twitter.com/intent/tweet?text=Check%20this%20product%20out.%0A<?php echo $DESCRIPTION ?>&url=<?php echo $URL ?>" class="twitter_icon" id="true" target="_blank" aria-label="Twitter"><svg aria-hidden="true" focusable="false" class="icon icon-twitter" viewBox="0 0 20 20">
  <path fill="currentColor" d="M18.608 4.967a7.364 7.364 0 0 1-1.758 1.828c0 .05 0 .13.02.23l.02.232a10.014 10.014 0 0 1-1.697 5.565 11.023 11.023 0 0 1-2.029 2.29 9.13 9.13 0 0 1-2.832 1.607 10.273 10.273 0 0 1-8.94-.985c.342.02.613.04.834.04 1.647 0 3.114-.502 4.4-1.506a3.616 3.616 0 0 1-3.315-2.46c.528.128 1.08.107 1.597-.061a3.485 3.485 0 0 1-2.029-1.216 3.385 3.385 0 0 1-.803-2.23v-.03c.462.242.984.372 1.587.402A3.465 3.465 0 0 1 2.116 5.76c0-.612.14-1.205.452-1.798a9.723 9.723 0 0 0 3.214 2.612A10.044 10.044 0 0 0 9.88 7.649a3.013 3.013 0 0 1-.13-.804c0-.974.34-1.808 1.034-2.49a3.466 3.466 0 0 1 2.561-1.035 3.505 3.505 0 0 1 2.551 1.104 6.812 6.812 0 0 0 2.24-.853 3.415 3.415 0 0 1-1.547 1.948 7.732 7.732 0 0 0 2.02-.542v-.01Z"/>
</svg>
</a>
<a href="https://pinterest.com/pin/create/button/?url=<?php echo $URL ?>&description=<?php echo $DESCRIPTION ?>" class="pinterest_icon" id="true" target="_blank" aria-label="Pinterest"><svg aria-hidden="true" focusable="false" class="icon icon-pinterest" viewBox="0 0 20 20">
  <path fill="currentColor" d="M10 2.01c2.124.01 4.16.855 5.666 2.353a8.087 8.087 0 0 1 1.277 9.68A7.952 7.952 0 0 1 10 18.04a8.164 8.164 0 0 1-2.276-.307c.403-.653.672-1.24.816-1.729l.567-2.2c.134.27.393.5.768.702.384.192.768.297 1.19.297.836 0 1.585-.24 2.248-.72a4.678 4.678 0 0 0 1.537-1.969c.37-.89.554-1.848.537-2.813 0-1.249-.48-2.315-1.43-3.227a5.061 5.061 0 0 0-3.65-1.374c-.893 0-1.729.154-2.478.461a5.023 5.023 0 0 0-3.236 4.552c0 .72.134 1.355.413 1.902.269.538.672.922 1.22 1.152.096.039.182.039.25 0 .066-.028.114-.096.143-.192l.173-.653c.048-.144.02-.288-.105-.432a2.257 2.257 0 0 1-.548-1.565 3.803 3.803 0 0 1 3.976-3.861c1.047 0 1.863.288 2.44.855.585.576.883 1.315.883 2.228 0 .768-.106 1.479-.317 2.122a3.813 3.813 0 0 1-.893 1.556c-.384.384-.836.576-1.345.576-.413 0-.749-.144-1.018-.451-.259-.307-.345-.672-.25-1.085.147-.514.298-1.026.452-1.537l.173-.701c.057-.25.086-.451.086-.624 0-.346-.096-.634-.269-.855-.192-.22-.451-.336-.797-.336-.432 0-.797.192-1.085.595-.288.394-.442.893-.442 1.499.005.374.063.746.173 1.104l.058.144c-.576 2.478-.913 3.938-1.037 4.36-.116.528-.154 1.153-.125 1.863A8.067 8.067 0 0 1 2 10.03c0-2.208.778-4.11 2.343-5.666A7.721 7.721 0 0 1 10 2.001v.01Z"/>
</svg>
</a></div><a href="/products/powerjoy-27m-us-plug" class="link product__view-details animate-arrow">
          Lihat semua detail
          <svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="footer_mail_arrow icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>

        </a>
      </product-info>
    </div></div>

  

<product-modal id="ProductModal-template--21423358214462__main" class="product-media-modal">
  <div
    class="product-media-modal__dialog"
    role="dialog"
    aria-label="Galeri media"
    aria-modal="true"
    tabindex="-1"
  >
    <button
      id="ModalClose-template--21423358214462__main"
      type="button"
      class="product-media-modal__toggle"
      aria-label="Tutup"
    >
      


<svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
  width="18"
  height="17"
>
  <path
    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
    fill="currentColor"
  >
</svg>

    </button>

    <div
      class="product-media-modal__content color-background-1 gradient"
      role="document"
      aria-label="Galeri media"
      tabindex="0"
    >

<img
    class="custom_popup_compare_38701485949246 global-media-settings global-media-settings--no-shadow"
    srcset="<?php echo $BANNER ?>?v=1709717434&width=550 550w,<?php echo $BANNER ?> 850w"
    sizes="(min-width: 750px) calc(100vw - 22rem), 1100px"
    src="<?php echo $BANNER ?>?v=1709717434&width=1445"
    
      alt="<?php echo $TITLE ?>"
    
    loading="lazy"
    width="1100"
    height="1100"
    data-media-id="38701485949246"
  >


<img
    class="custom_popup_compare_38701485982014 global-media-settings global-media-settings--no-shadow"
    srcset="https://www.istudio.store/cdn/shop/files/PowerJoy27M_USPlug_.002.jpg?v=1709717433&width=550 550w,https://www.istudio.store/cdn/shop/files/PowerJoy27M_USPlug_.002.jpg?v=1709717433 850w"
    sizes="(min-width: 750px) calc(100vw - 22rem), 1100px"
    src="https://www.istudio.store/cdn/shop/files/PowerJoy27M_USPlug_.002.jpg?v=1709717433&width=1445"
    
      alt="<?php echo $TITLE ?>"
    
    loading="lazy"
    width="1100"
    height="1100"
    data-media-id="38701485982014"
  >


<img
    class="custom_popup_compare_38701486014782 global-media-settings global-media-settings--no-shadow"
    srcset="https://www.istudio.store/cdn/shop/files/PowerJoy27M_USPlug_.003.jpg?v=1709717433&width=550 550w,https://www.istudio.store/cdn/shop/files/PowerJoy27M_USPlug_.003.jpg?v=1709717433 850w"
    sizes="(min-width: 750px) calc(100vw - 22rem), 1100px"
    src="https://www.istudio.store/cdn/shop/files/PowerJoy27M_USPlug_.003.jpg?v=1709717433&width=1445"
    
      alt="<?php echo $TITLE ?>"
    
    loading="lazy"
    width="1100"
    height="1100"
    data-media-id="38701486014782"
  >


<img
    class="custom_popup_compare_38701486047550 global-media-settings global-media-settings--no-shadow"
    srcset="https://www.istudio.store/cdn/shop/files/PowerJoy27M_USPlug_.004.jpg?v=1709717433&width=550 550w,https://www.istudio.store/cdn/shop/files/PowerJoy27M_USPlug_.004.jpg?v=1709717433 850w"
    sizes="(min-width: 750px) calc(100vw - 22rem), 1100px"
    src="https://www.istudio.store/cdn/shop/files/PowerJoy27M_USPlug_.004.jpg?v=1709717433&width=1445"
    
      alt="<?php echo $TITLE ?>"
    
    loading="lazy"
    width="1100"
    height="1100"
    data-media-id="38701486047550"
  >
</div>
  </div>
</product-modal>


  

<modal-dialog id="PopupModal-popup_custom_qGhkNR" class="product-popup-modal" >
      <div role="dialog" aria-label="Pembayaran" aria-modal="true" class="product-popup-modal__content" tabindex="-1">
        <button id="ModalClose-popup_custom_qGhkNR" type="button" class="product-popup-modal__toggle" aria-label="Tutup">


<svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
  width="18"
  height="17"
>
  <path
    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
    fill="currentColor"
  >
</svg>
</button>
        <div class="product-popup-modal__content-info"><h1 class="h2">Promo kartu kredit (online)</h1><div style="text-align: start;">
    <center>
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-01.jpg" alt="">
        <table width="100%" border="0" class="tb-custom">
            <tbody>
                <tr>
                    <td><a href="#ktc"><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-02.jpg" alt=""></a></td>
                    <td><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-03.jpg" alt=""></td>
                </tr>
            </tbody>
        </table>
        <table width="100%" border="0" class="tb-custom">
            <tbody>
                <tr>
                    <td><a href="#krungsri"><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-04.jpg" alt=""></a></td>
                    <td><a href="#krungsri"><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-05.jpg" alt=""></a></td>
                    <td><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-06.jpg" alt=""></td>
                </tr>
            </tbody>
        </table>
        <table width="100%" border="0" class="tb-custom">
            <tbody>
                <tr>
                    <td><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-07.jpg" alt=""></td>
                    <td><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-08.jpg" alt=""></td>
                    <td><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-09.jpg" alt=""></td>
                </tr>
            </tbody>
        </table>
        <img id="ktc" src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-10.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-11.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-12.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-13.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-14.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-15.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-16.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-17.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-18.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-19.jpg" alt="">
        <img id="krungsri" src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-20.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-21.jpg" alt="">
        <table width="100%" border="0" class="tb-custom">
            <tbody>
                <tr>
                    <td><a href="/pages/bank-promotion-store" target="_self"><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-22.jpg" alt=""></a></td>
                    <td><a href="/pages/nonbank-finance" target="_blank"><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-23.jpg" alt=""></a></td>
                </tr>
            </tbody>
        </table>
    </center>
</div>

        </div>
      </div>
    </modal-dialog><modal-dialog id="PopupModal-popup_custom_EmbHcE" class="product-popup-modal" >
      <div role="dialog" aria-label="More Information" aria-modal="true" class="product-popup-modal__content" tabindex="-1">
        <button id="ModalClose-popup_custom_EmbHcE" type="button" class="product-popup-modal__toggle" aria-label="Tutup">


<svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
  width="18"
  height="17"
>
  <path
    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
    fill="currentColor"
  >
</svg>
</button>
        <div class="product-popup-modal__content-info"><h1 class="h2">Trade-in Program</h1><!-- <center style="max-width: 100%; width: 900px; margin: 0 auto;"> -->
<div class="trade-in">
    <center>
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260312-trade-in-iphone-17-series-01.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260312-trade-in-iphone-17-series-02.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260312-trade-in-iphone-17-series-03.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260312-trade-in-iphone-17-series-04.jpg" alt="">
        <a href="/pages/store-locator" target="_self">
            <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260312-trade-in-iphone-17-series-05.jpg" alt="">
        </a>
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260312-trade-in-iphone-17-series-06.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260312-trade-in-iphone-17-series-07.jpg" alt="">
        <a href="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/trade_in_march_2026_istudio.pdf#page=1" target="_self">
            <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260312-trade-in-iphone-17-series-08.jpg" alt="iStudio Trade in : iPhone">
        </a>
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260312-trade-in-iphone-17-series-09.jpg" alt="">
        <a href="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/trade_in_march_2026_istudio.pdf#page=5" target="_self">
            <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260312-trade-in-iphone-17-series-10.jpg" alt="iStudio Trade in : iPad">
        </a>
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260312-trade-in-iphone-17-series-11.jpg" alt="">
        <a href="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/trade_in_march_2026_istudio.pdf#page=11" target="_self">
            <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260312-trade-in-iphone-17-series-12.jpg" alt="iStudio Trade in : Mac">
        </a>
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260312-trade-in-iphone-17-series-13.jpg" alt="">
        <a href="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/trade_in_march_2026_istudio.pdf#page=9" target="_self">
            <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260312-trade-in-iphone-17-series-14.jpg" alt="iStudio Trade in : Apple Watch">
        </a>
        <a href="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/trade_in_march_2026_istudio.pdf#page=25" target="_self">
            <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260312-trade-in-iphone-17-series-15.jpg" alt="iStudio Trade in : Android">
        </a>
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260312-trade-in-iphone-17-series-16.jpg" alt="">
    </center>
</div>

<style>
    .trade-in {max-width: 100%; width: 900px; margin: 0 auto;}
</style>

        </div>
      </div>
    </modal-dialog><script src="https://www.istudio.store/cdn/shop/t/4/assets/product-modal.js?v=116616134454508949461721821279" defer="defer"></script>
    <script src="https://www.istudio.store/cdn/shop/t/4/assets/media-gallery.js?v=96661908581229995091721821279" defer="defer"></script><script type="module" defer="defer">
    document.addEventListener('DOMContentLoaded', function () {
      function isIE() {
        const ua = window.navigator.userAgent;
        const msie = ua.indexOf('MSIE ');
        const trident = ua.indexOf('Trident/');

        return msie > 0 || trident > 0;
      }

      if (!isIE()) return;
      const hiddenInput = document.querySelector('#product-form-template--21423358214462__main input[name="id"]');
      const noScriptInputWrapper = document.createElement('div');
      const variantSwitcher =
        document.querySelector('variant-radios[data-section="template--21423358214462__main"]') ||
        document.querySelector('variant-selects[data-section="template--21423358214462__main"]');
      noScriptInputWrapper.innerHTML = document.querySelector(
        '.product-form__noscript-wrapper-template--21423358214462__main'
      ).textContent;
      variantSwitcher.outerHTML = noScriptInputWrapper.outerHTML;

      if(document.querySelector('#Variants-template--21423358214462__main')) document.querySelector('#Variants-template--21423358214462__main').addEventListener('change', function (event) {
        hiddenInput.value = event.currentTarget.value;
      });
    });
  </script><script type="application/ld+json">
    {
      "@context": "http://schema.org/",
      "@type": "Product",
      "name": "<?php echo $TITLE ?>",
      "url": "https:\/\/www.istudio.store\/products\/powerjoy-27m-us-plug",
      "image": [
          "https:<?php echo $BANNER ?>\u0026width=1920"
        ],
      "description": "Charger PowerJoy 27W, pengisian cepat, dapat mengisi 2 perangkat sekaligus, mudah dibawa, dari brand INNERGIE\nCharger PowerJoy 27W dapat mengisi dua perangkat sekaligus melalui port USB-C + USB-A dengan output hingga 5.4A dan kompatibel untuk ponsel, tablet, hingga MacBook Anda. Desainnya seukuran telapak tangan, ringan, mudah dibawa, dan mendukung pengisian cepat di mana saja. Dilengkapi sistem keamanan untuk perlindungan arus berlebih, suhu berlebih, dan korsleting, cocok digunakan di rumah, kantor, maupun saat bepergian",
      "sku": "4710901730444",
      "brand": {
        "@type": "Brand",
        "name": "Innergie"
      },
      "offers": [{
            "@type" : "Offer","sku": "4710901730444","availability" : "https://schema.org/OutOfStock",
            "price" : 720.0,
            "priceCurrency" : "IDR",
            "url" : "https:\/\/www.istudio.store\/products\/powerjoy-27m-us-plug?variant=48898152595774"
          }
]
    }
  </script>
</section>
<div class="sticky-atc-bar js-sticky-atc apl-section-main-product-sticky-atc-bar">
  <div class="page-width page-width-sticky">
    <div class="sticky-container sticky-container--notify">
      <div class="one-pickup"><link href="https://www.istudio.store/cdn/shop/t/4/assets/component-pickup-availability.css?v=87770670518225150311753282913" rel="stylesheet" type="text/css" media="all" />
          <pickup-availability
            id="pickup_id"
            class="product__pickup-availabilities no-js-hidden apl-section-pickup"
            data-product-id="10856143159614"
            data-preorder="false"
            data-selected-options="[{&quot;name&quot;:&quot;Title&quot;,&quot;position&quot;:1,&quot;values&quot;:[&quot;Default Title&quot;]}]"
            data-item-quantity="1"
            data-error="You are ordering more units than available at this location."
          >
            <pickup-availability-preview class="pickup-availability-preview">
              <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none"><path d="M12.7742 13.3755H3.05191C2.2285 13.3755 1.55871 12.7056 1.55871 11.8822L1.55859 5.46973H2.29228V11.8822C2.29228 12.301 2.63304 12.6417 3.0518 12.6417H12.7743C13.1931 12.6417 13.5338 12.3011 13.5338 11.8822L13.534 5.46973H14.2676V11.8822C14.2676 12.7056 13.5977 13.3755 12.7743 13.3755H12.7742Z" fill="#1D1D1F"/><path d="M6.19597 6.04216C5.04487 6.04216 4.1084 5.10557 4.1084 3.95459H4.84209C4.84209 4.70103 5.44941 5.30836 6.19597 5.30836C6.94253 5.30836 7.54985 4.70103 7.54985 3.95459H8.28354C8.28354 5.10557 7.34707 6.04216 6.19597 6.04216Z" fill="#1D1D1F"/><path d="M9.63738 6.04397C8.48628 6.04397 7.5498 5.10738 7.5498 3.95639V2.43213H8.28349V3.95639C8.28349 4.70284 8.89082 5.31016 9.63738 5.31016C10.3839 5.31016 10.9913 4.70284 10.9913 3.95639H11.7249C11.7249 5.10738 10.7885 6.04397 9.63738 6.04397Z" fill="#1D1D1F"/><path d="M13.0793 6.04286C11.9282 6.04286 10.9917 5.10627 10.9917 3.95529V2.43102H11.7254V3.95529C11.7254 4.70173 12.3327 5.30906 13.0793 5.30906C13.8258 5.30906 14.4333 4.70173 14.4333 3.95529V2.54174L13.231 0.73392H2.60295L1.40068 2.54163V3.95517C1.40068 4.70162 2.00812 5.30894 2.75468 5.30894C3.50124 5.30894 4.10856 4.70162 4.10856 3.95517V2.43091H4.84225V3.95517C4.84225 5.10627 3.90578 6.04275 2.75468 6.04275C1.60347 6.04275 0.666992 5.10616 0.666992 3.95517V2.43091C0.666992 2.35862 0.688332 2.2879 0.728328 2.22768L2.10075 0.16379C2.16868 0.0614505 2.28342 0 2.40621 0H13.4275C13.5503 0 13.6651 0.0614477 13.733 0.16379L15.1057 2.22779C15.1458 2.28802 15.167 2.35874 15.167 2.43102V3.95529C15.167 5.10627 14.2305 6.04286 13.0793 6.04286H13.0793Z" fill="#1D1D1F"/><path d="M1.0332 2.06055H14.7997V2.79435H1.0332V2.06055Z" fill="#1D1D1F"/><rect x="5.4806" y="8.38246" width="4.63549" height="4.63549" rx="0.534864" stroke="black" stroke-width="0.713153"/></svg>
              <div class="pickup-availability-info">
                <p class="caption-large apl-section-pickup-title">
                  <b>Ambil di cabang</b>
                </p>
                <div class="js-pickup-availability-info">
                  <p class="caption">
                    Loading store <i class="fa fa-spinner fa-spin"></i>
                  </p>
                </div>
              </div>
            </pickup-availability-preview>
            <template>
              <p class="caption">
                Error loading
              </p>
            </template>
          </pickup-availability>
          <script src="https://www.istudio.store/cdn/shop/t/4/assets/pickup-availability.js?v=63104329733614191841756300621" defer="defer"></script>
        
        <p class="free_shipping_msg apl-section-shipping" style="display:none;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
  <path d="M1.89353 9.84661C1.43772 9.84661 1.09151 9.72831 0.854906 9.49171C0.618302 9.2551 0.5 8.9089 0.5 8.45308V1.7464C0.5 1.28711 0.618302 0.939166 0.854906 0.702562C1.09151 0.465958 1.43772 0.347656 1.89353 0.347656H9.40919C9.865 0.347656 10.2112 0.467698 10.4478 0.707782C10.6844 0.947865 10.8027 1.29407 10.8027 1.7464V9.02198L10.1608 9.39776V1.75684C10.1608 1.50284 10.0946 1.31321 9.96242 1.18795C9.8302 1.05921 9.64057 0.994838 9.39353 0.994838H1.90397C1.65344 0.994838 1.46381 1.05921 1.33507 1.18795C1.20633 1.31321 1.14196 1.50284 1.14196 1.75684V8.43743C1.14196 8.69143 1.20633 8.8828 1.33507 9.01154C1.46381 9.14028 1.65344 9.20465 1.90397 9.20465H2.89562V9.84661H1.89353ZM10.4322 3.88628V3.24432H12.2902C12.5303 3.24432 12.7356 3.27737 12.9061 3.34348C13.08 3.40959 13.2383 3.51919 13.381 3.67229L15.1555 5.67647C15.2843 5.8226 15.373 5.967 15.4217 6.10966C15.4739 6.25232 15.5 6.43499 15.5 6.65768V8.45308C15.5 8.9089 15.3817 9.2551 15.1451 9.49171C14.9085 9.72831 14.5623 9.84661 14.1065 9.84661H13.3601V9.20465H14.0908C14.3413 9.20465 14.531 9.14028 14.6597 9.01154C14.7919 8.8828 14.858 8.69143 14.858 8.43743V6.64202C14.858 6.54111 14.8389 6.44021 14.8006 6.33931C14.7624 6.23492 14.7067 6.14098 14.6336 6.05747L12.9426 4.1629C12.8452 4.05503 12.7408 3.98196 12.6294 3.94369C12.5181 3.90542 12.3876 3.88628 12.238 3.88628H10.4322ZM11.7422 6.64202C11.6239 6.64202 11.5282 6.60722 11.4551 6.53764C11.3855 6.46805 11.3507 6.3741 11.3507 6.2558V4.41864H12.1284C12.2189 4.41864 12.2989 4.43777 12.3685 4.47605C12.4381 4.51084 12.5007 4.55782 12.5564 4.61697L14.1117 6.3654C14.15 6.40716 14.1795 6.44891 14.2004 6.49066C14.2248 6.53242 14.237 6.58287 14.237 6.64202H11.7422ZM4.27349 11.3341C3.95338 11.3341 3.6611 11.2558 3.39666 11.0992C3.1357 10.9426 2.92693 10.7321 2.77035 10.4677C2.61378 10.2067 2.53549 9.9162 2.53549 9.59609C2.53549 9.27598 2.61378 8.98544 2.77035 8.72448C2.92693 8.46004 3.1357 8.25128 3.39666 8.09818C3.6611 7.9416 3.95338 7.86331 4.27349 7.86331C4.5936 7.86331 4.88413 7.9416 5.14509 8.09818C5.40605 8.25128 5.61482 8.46004 5.7714 8.72448C5.92798 8.98544 6.00626 9.27598 6.00626 9.59609C6.00626 9.9162 5.92798 10.2067 5.7714 10.4677C5.61482 10.7321 5.40605 10.9426 5.14509 11.0992C4.88413 11.2558 4.5936 11.3341 4.27349 11.3341ZM4.27349 10.7756C4.48921 10.7756 4.6858 10.7217 4.86326 10.6138C5.04419 10.5095 5.18685 10.3668 5.29123 10.1859C5.39562 10.0084 5.44781 9.81182 5.44781 9.59609C5.44781 9.37688 5.39562 9.17855 5.29123 9.0011C5.18685 8.82365 5.04419 8.68273 4.86326 8.57835C4.6858 8.47048 4.48921 8.41655 4.27349 8.41655C4.05428 8.41655 3.85595 8.47048 3.6785 8.57835C3.50104 8.68273 3.35839 8.82365 3.25052 9.0011C3.14266 9.17855 3.08873 9.37688 3.08873 9.59609C3.08873 9.81182 3.14266 10.0084 3.25052 10.1859C3.35839 10.3668 3.50104 10.5095 3.6785 10.6138C3.85595 10.7217 4.05428 10.7756 4.27349 10.7756ZM11.8622 11.3341C11.5456 11.3341 11.255 11.2558 10.9906 11.0992C10.7262 10.9426 10.5157 10.7321 10.3591 10.4677C10.2025 10.2067 10.1242 9.9162 10.1242 9.59609C10.1242 9.27598 10.2025 8.98544 10.3591 8.72448C10.5157 8.46004 10.7262 8.25128 10.9906 8.09818C11.255 7.9416 11.5456 7.86331 11.8622 7.86331C12.1823 7.86331 12.4729 7.9416 12.7338 8.09818C12.9983 8.25128 13.207 8.46004 13.3601 8.72448C13.5167 8.98544 13.595 9.27598 13.595 9.59609C13.595 9.9162 13.5167 10.2067 13.3601 10.4677C13.207 10.7321 12.9983 10.9426 12.7338 11.0992C12.4729 11.2558 12.1823 11.3341 11.8622 11.3341ZM11.8622 10.7756C12.0814 10.7756 12.2797 10.7217 12.4572 10.6138C12.6347 10.5095 12.7756 10.3668 12.88 10.1859C12.9843 10.0084 13.0365 9.81182 13.0365 9.59609C13.0365 9.37688 12.9826 9.17855 12.8747 9.0011C12.7704 8.82365 12.6294 8.68273 12.452 8.57835C12.2745 8.47048 12.0779 8.41655 11.8622 8.41655C11.6465 8.41655 11.4499 8.47048 11.2724 8.57835C11.095 8.68273 10.9523 8.82365 10.8445 9.0011C10.7366 9.17855 10.6827 9.37688 10.6827 9.59609C10.6827 9.81182 10.7366 10.0084 10.8445 10.1859C10.9523 10.3668 11.095 10.5095 11.2724 10.6138C11.4499 10.7217 11.6465 10.7756 11.8622 10.7756ZM5.70355 9.84661V9.20465H10.4896V9.84661H5.70355Z" fill="black"/>
</svg>

          <span>
          <b>Gratis ongkir :</b> Within 48 hours guaranteed          </span>
        </p>
      </div>
      <div class="two-price ">
        
        <div id="price-element">
          <div id="price-footer-element">
<style>
  .price-segment-discount {
    border-radius: 6px;
    background: #c31432;
    padding: 1px;
    padding-left: 5px;
    padding-right: 5px;
    color: white;
    display: inline-block;
    font-size: 15px;
  }
  #price-item-sale {
    font-family: var(--font-body-family);
    font-style: normal;
    font-weight: 600;
    font-size: 28px;
    line-height: 28px;
    letter-spacing: -0.02em;
  }
  .footerOr3 {
    display: none;
  }
  @media screen and (max-width: 767px) {
    #price-element .footerOr3 {
      display: inline-block;
      color: #000;
    }
  }
</style>

<div
  class="
    price price-product-pdp apl-section-product-price price--large price--sold-out price--show-badge"
>
  <div class="price__container">
      
      
    

    <p class="actual_price  ">
      <span class="price--title">
        
      </span>
      <span
        class="js-product-price-with-care-warranty actual_price_bold cto_actual_price_bold"
        data-price="Rp720.00 IDR"
        data-price-without-currency="720.00"
        data-price-with-care=""
        data-price-with-secWarranty=""
        data-price-with-care-and-secWarranty=""
        data-price-with-trade-in="0"
        data-price-calculation=""
      >
        Rp720.00 IDR
      </span>
    </p>
    
<small class="unit-price caption hidden">
      <span class="visually-hidden">Harga per unit</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div>
  
</div>
</div>
        </div>
        
        
        
          <input type="hidden" id="tax_free_campaign" value=0 />
          <div id="footer_monthly_price">
            
<link href="https://www.istudio.store/cdn/shop/t/4/assets/component-net-monthly-pricing.css?v=162713781178805158931753282910" rel="stylesheet" type="text/css" media="all" />

          </div>
        
        
        
      </div>
      <div class="three-atc"><div class="hide---atc">
            
            
              
              <a  href="javascript:void(0)" id="footer-out" class="footer-out product-form__submit button button--full-width button--secondary" >
                <span>
                  Stok habis
                </span>
              </a>
              
            
            
          </div></div>
      <div class="four-buynow ">
<link href="https://www.istudio.store/cdn/shop/t/4/assets/component-notify.css?v=148175107538468737141753282912" rel="stylesheet" type="text/css" media="all" />
<script src="https://www.istudio.store/cdn/shop/t/4/assets/notify.js?v=51235072996458813111753282910" defer></script><section class="notify">
  <button
    class="
      notify__button button button--full-width js-notify-modal-open_button
      
    "
    type="button"
    data-variant="48898152595774"
    data-product="10856143159614"
    data-form-type="powerjoy-27m-us-plug-notify-form"
  >
    <span class="notify__button-text">Beri tahu saat stok tersedia</span>
      <span class="notify__button-text notify__button-text--mobile">
        
Beri tahu saat stok tersedia
      </span><i class="fa-solid fa-angle-right billboard_icon notify__icon"></i></button>
</section>

      </div>
    </div>
  </div>
</div>
<input type="hidden" id="page_title" value="<?php echo $TITLE ?> iStudio Online Store" />



<script type="application/json" id="adobeAnalyticsProductData">{
    "product_name": "<?php echo $TITLE ?>",
    "mpn_id": "4710901730444",
    "currency": "IDR",
    "product_price": {
      "sellingPrice": 720.0,
      "basePrice":720.0},
    "brand":"Third-party",
    "lob": "Perangkat pengisian daya",
    "sub_lob": "<?php echo $TITLE ?>"
  }
</script>


<style>.slider_media video {max-width: 100%;}</style>
<script>
  
  
  var unavailable_msg = "<div class='unavailableOptionTxt'>Beberapa opsi telah diperbarui sesuai ketersediaan</div>";
  var varselect='Pilih';
  var varunselect='unselected';
  function getMeta(url, elem) {
    var img = new Image();
    img.src = url;
    img.onload = function() {
      //var apr = this.width/this.height;
      var apr = this.width/this.height;
      var calc_padd = (1 / apr) * 100;
      calc_padd = calc_padd + '%';
      var calc_height = Math.ceil(973 / apr);
      elem.attr('height',calc_height);
      elem.parent().css('padding-top', calc_padd);
    }
  }

  
  document.addEventListener("DOMContentLoaded", function() {
    //quantity input textbox-server error issue - fix
    $("#prodQuantity").keyup("input", function(event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        event.target.blur();
      }
    });
    $("#prodQuantity").on("change", function(event) {
      resetErrors();
    });

    var prodList=localStorage.getItem("product-click");
    //  localStorage.removeItem("product-click");
    var prevPage= document.referrer;
    if(prevPage.includes("collections")){
      prevPage="PLP :: "+formatString(prevPage.split("/")[prevPage.split("/").length-1]);
    }else if(prevPage.includes("pages")){
      prevPage=prevPage.split("/")[prevPage.split("/").length-1]+"_page";
    }else if(prevPage.includes("search")){
      prevPage="Search Results"
    }else if(prevPage.includes("products")){
      var arr=prevPage.split("/");
      prevPage=arr[arr.length-1].split("?")[0]+"_pdp";
    }else if(prevPage.includes("cart")){
      var pageName=window.location.href;
      var arr=prevPage.split("/");
      prevPage="Cart Page";
    }else{
      prevPage="home_page"
    }
    if(prodList){
      document.getElementById("product_list").setAttribute('value', prodList);
    }else{
      localStorage.setItem("product-click", prevPage);
      document.getElementById("product_list").setAttribute('value', prevPage);
    }
    $(".product__info-container .product__accordion").each(function(index,item){
      if(index==0){
        $(item).find("details").attr("open","open");
      }
    });
    var product_price = $("#price-element").find(".actual_price_bold").text();
    document.getElementById("product_price").setAttribute('value', product_price);
    var prod_option = [];
    var checked_value1 = [];
    var prod_option1 = [];
    var prod_option2 = [];
    

var option_values = $('input[type=radio].smart_radio');
    var compareArray = [];
    $(option_values).each(function(i){
      compareArray.push($(this).val()+$(this).data('label_name'))
    });

    var compareIndex = {};
    compareArray.forEach(function(item, index) {
      compareIndex[item] = index;
    });
    prod_option.sort(function(a, b) {
      var a_parts = a.option_new.split('|!');
      var b_parts = b.option_new.split('|!');
      for (var i = 0; i < Math.min(a_parts.length, b_parts.length); i++) {
        var a_item = a_parts[i];
        var b_item = b_parts[i];
        var a_index = compareIndex[a_item];
        var b_index = compareIndex[b_item];
        if (a_index !== undefined && b_index !== undefined) {
          if (a_index < b_index) {
            return -1;
          } else if (a_index > b_index) {
            return 1;
          }
        } else if (a_index !== undefined) {
          return -1;
        } else if (b_index !== undefined) {
          return 1;
        }
      }
      return a_parts.length - b_parts.length;
    });

    var color_trans = "Warna";
    var case_color_trans = "Casing";
    var band_color_trans = "Warna tali";
    var $featuresValue = document.querySelector('.js-features-value') || null;

    if ($featuresValue) {
      updateFeaturesMarkup($featuresValue);
    }
    $(document).on('change', '.product-form__input:not(.product-form__input--trade-in) input[type=radio]', function() {
      var this_clicked = $(this);
      var option = this_clicked.siblings("label:first").attr("data-option");
      var selectedColor=$(this).closest("fieldset").attr("data-selectedColor");
      var curr_color=$('input[type=radio][name="'+color_trans+'"].smart_radio:checked').val();
      var band_curr_color=$('input[type=radio][name="'+band_color_trans+'"].smart_radio:checked').val();
      $(this).closest("fieldset").attr("data-selectedColor",curr_color);
      //option == color_trans

      var check_value = [];
      $('input[type=radio].smart_radio').removeClass('disabled');
      $('input[type=radio].smart_radio').removeAttr('disabled');
      $('input[type=radio].smart_radio').removeClass('disabled-strike');
      $('input[type=radio].smart_radio').removeClass('disabled-cursor');
      $('input[type=radio].smart_radio').removeClass('disabled-cursor-checked');
      var v= $('input[type=radio].smart_radio:checked');
      let stitched_data = "";
      $(v).each(function(i){
        check_value.push($(this).val());
        if(check_value[i]){
          stitched_data = stitched_data !='' ? stitched_data+"|!"+check_value[i] : check_value[i];
        }
      });
      // console.log(stitched_data);
      let entry = prod_option.find(e => e.option === stitched_data);
      $(".product-custom-media").css("opacity","0.3");
      $(".product__media-list").css("opacity","0.3");
      if (entry) {
        var prod_hadle = entry.url;
        var variant_id = entry.variant_id;
        var prod_available = entry.available;
        var product_id= entry.product_id;
        var product_sku = entry.product_sku;
        var product_title = entry.product_title;
        var product_type =  entry.product_type;
        var product_price = entry.product_price;
        var productcomPrice = entry.productcomPrice;
        var viewurl = entry.full_url;

        var unavailableOptionTxt = $('.unavailableOptionTxt');
        if (unavailableOptionTxt) unavailableOptionTxt.remove();

        if(prod_available == 'true'){
          changeVariantAjax(viewurl, product_id, product_sku, product_title, product_type, product_price, productcomPrice,this_clicked);
          showCart();
        }else{
          changeVariantAjax(viewurl, product_id, product_sku, product_title, product_type, product_price, productcomPrice, this_clicked);
          hideCart();
        }
      }else{
        unavailable(this_clicked);
        // checkAvailability();
      }
    });

    function handleize(text) {
      return text.toString().toLowerCase()
        .replace(/\s+/g, '-')
        .replace(/[^\w\-]+/g, '')
        .replace(/\-\-+/g, '-')
        .replace(/^-+/, '')
        .replace(/-+$/, '');
    }

    function unavailable(this_clicked){
      var label_name = this_clicked.data('label_name');
      var option_name = this_clicked.data('option_name');

      var inputString = this_clicked.val()+label_name;
      var totalvarients = $('fieldset.product-form__input').length;
      var isFirstTrue = false;
      var true_prod = "true";
      var v= $('input[type=radio].smart_radio:checked');
      if(prod_option.filter(option_new => option_new.option_new.includes(inputString))){
        var filteredProducts = prod_option.filter(option_new => option_new.option_new.includes(inputString));
      }
      if(filteredProducts.some(product_opt1 => product_opt1.product_opt1.includes(true_prod))){
          filteredProducts = filteredProducts.filter(product_opt1 => product_opt1.product_opt1.includes(true_prod));
      }

      var filteredResults = filteredProducts?.filter((prod) => {
        var colorOption = prod?.option?.split('|')[0];
        if (colorOption) {
          var handleizedColorOption = handleize(colorOption);
          var handleizedValue = handleize(this_clicked.val());

          return handleizedColorOption === handleizedValue;
        }

        return false;
      }) || [];
      $('input[type=radio].smart_radio:checked').each(function(i) {
        var value = $(this).val() + $(this).data('label_name');
        if (!filteredResults.length) return

        if (filteredResults.some(option_new => option_new.option_new.includes(value))) {
          filteredResults = filteredResults.filter(option_new => option_new.option_new.includes(value));
        }
        if (filteredResults.some(product_opt1 => product_opt1.product_opt1.includes(true_prod))) {
          filteredResults = filteredResults.filter(product_opt1 => product_opt1.product_opt1.includes(true_prod));
        }
      });
      if (filteredResults.length > 0) {
        filteredProducts = filteredResults;
      }
      var optionNewValue = filteredProducts[0].option_new;
      $('.product-form__input input[type=radio]').each(function() {
        var radioVal = $(this).val();
        var labelName = $(this).data('label_name') || "";

        // Split by delimiter to get individual option parts
        var optionParts = optionNewValue.split("|!");

        // Check if any part starts with the radio value
        var shouldCheck = optionParts.some(part => {
          var handledRadioVal = handleize(radioVal);
          var handledPart = handleize(part);

          // Check if the part starts with exactly this radio value
          return (
            handledPart.startsWith(handledRadioVal) && handledPart.indexOf(handledRadioVal) === 0
          );
        });

        if (shouldCheck) {
          if (!$(this).prop('checked')) {
            $(this).prop('checked', true);
          }
        }
      });
      //$(this).parent().append(unavailable_msg);
      var parentElement = $(this_clicked).parent('.js-product-option-form');
      const unavailableMessaging = document.querySelectorAll('.unavailableOptionTxt') || [];

      if (parentElement) {
        if (unavailableMessaging?.length > 0) {
          [...unavailableMessaging].forEach((item) => {
            item.remove();
          });
        }

        // append unavailable message if not already appended
        if (parentElement.find('.unavailableOptionTxt').length == 0) {
          parentElement.append(unavailable_msg);
        }
      }

      var prod_hadle = filteredProducts[0].url;
      var variant_id = filteredProducts[0].variant_id;
      var prod_available = filteredProducts[0].available;
      var product_id= filteredProducts[0].product_id;
      var product_sku = filteredProducts[0].product_sku;
      var product_title = filteredProducts[0].product_title;
      var product_type =  filteredProducts[0].product_type;
      var product_price = filteredProducts[0].product_price;
      var productcomPrice = filteredProducts[0].productcomPrice;
      var viewurl = filteredProducts[0].full_url;
      changeVariantAjax(viewurl, product_id, product_sku, product_title, product_type, product_price, productcomPrice,this_clicked);
      if(filteredProducts[0].available == 'true'){
        showCart();
      }else{
        hideCart();
      }
    }

    function showCart(){
      $(".show_atc a").show();
      $(".show_buy a").show();
      $(".hide---atc a").hide();
      $(".hide---atc span").hide();
      $(".free_shipping_msg").show();
      $(".free_shipping_msg_2").show();
      $("pickup-availability").css("display", "block");
      $(".four-buynow").addClass("four-atc");
      $(".applyforFinancing").show();
      $(".sticky-container").removeClass("outofstock_sc");
    }
    function hideCart(){
      $(".hide---atc a").show();
      $(".hide---atc span").show();
      $(".show_atc a").hide();
      $(".show_buy a").hide();
      $(".free_shipping_msg").hide();
      $(".free_shipping_msg_2").hide();
      $("pickup-availability").css("display", "none");
      $(".four-buynow").removeClass("four-atc");
      $(".applyforFinancing").hide();
      $(".sticky-container").addClass("outofstock_sc");
    }
    var shop_url = window.shopUrl;
    function changeVariantAjax(viewurl, product_id, product_sku, product_title, product_type, product_price, productcomPrice,this_clicked){
      var option1=this_clicked.siblings("label:first").attr("data-option");
      var option_color = this_clicked.attr("data-color_present");
      const productRecommendationsSection = $('.frequent-products');
      const productRecommendationsSectionID = $(productRecommendationsSection).data('section-id');      resetErrors();

      var sectionIds = ['template--21423358214462__main', 'product-ajax-data'];
      $('.js-collapsecon').each(function() {
        var sectionId = $(this).attr('id')?.split('shopify-section-')[1] || null;
        if (sectionId) {
          sectionIds.push(sectionId);
        }
      });

      $.ajax({
        type: 'GET',
        url: viewurl + `?sections=${sectionIds.join(',')}`,
        beforeSend: function() {
          $('variant-radios1').addClass('var_radio_point_none');
          // $('.loader_pdp_variant_switch').addClass('active');
          $("pickup-availability").each(function(index,item){
            item.renderLoading();
          });
        },
        success: function(resp) {
          var itemData = Object.values(resp).join('');
          // remove the store locator from the response so it doesn't fetch the API each time jQuery is called
          var itemDataNode = new DOMParser().parseFromString(itemData, 'text/html');
          var newStoreLocator = itemDataNode.querySelector('my-store-locator');
          if (newStoreLocator) {
            newStoreLocator.remove();
          }

          itemData = itemDataNode;
          var newPickupAvailability = $(itemData).find('pickup-availability').first();
          var productId = newPickupAvailability.attr("data-product-id");
          var selectedOptions = newPickupAvailability.attr("data-selected-options");
          var nmpTest = document.querySelector('.js-nmp-test-mode') || null;
          var nmpTrigger = itemData?.querySelector('.js-net-monthly-pricing-pdp-trigger') || null;
          $("pickup-availability").attr("data-product-id",productId);
          $("pickup-availability").attr("data-selected-options",selectedOptions);
          // update store locator product info
          $(".js-store-locator-product-info").html($(itemData).find('.js-store-locator-product-info').html());
          // init store locator again with new variant details
          var storeLocator = document.querySelector('my-store-locator');
          if (storeLocator) {
            storeLocator.init();
          }

          if (nmpTrigger && nmpTest) {
            var { product: productHandle } = nmpTrigger.dataset || {};

            if (productHandle) {
              // init nmp test mode with new variant details
              nmpTest.getNMPTerms(productHandle);
            }
          }

          // update old product tag html to new product tag html
          var newProductTag = $(itemData).find('.product_tag_display_container').first();
          $('.product_tag_display_container').each(function(index, item){
            if (newProductTag) {
              $(item).html(newProductTag.html().trim());
            } else {
              $(item).html('');
            }
          });

          $(document).attr('title', $(itemData).find('#page_title').val());
          console.log("Newer page", $(itemData))
          window.history.replaceState("", "", viewurl);
          //var product_list = $("#product_list").val();
          $(".product__title").html($(itemData).find('.product__title').html());
          $(".color-name").html($(itemData).find('.color-name').html());
          $(".band-color-name").html($(itemData).find('.band-color-name').html());
          $(".skuAndBarcode").html($(itemData).find('.skuAndBarcode').html());
          $(".product__preorder-message").html($(itemData).find('.product__preorder-message').html());
          $(".pricestyle").html($(itemData).find('.pricestyle').html());
          $(itemData).find(".product__info-container .product__accordion").each(function(index,item){
            // var isOpen=$(".product__info-container").find(".product__accordion").eq(index).find("details").attr("open");
            if(index==0){
              $(item).find("details").attr("open","open");
            }
            $(".product__info-container").find(".product__accordion").eq(index).html($(item).html());
          });

          $(".product-custom-media").html($(itemData).find('.product-custom-media').html());
          $(".product-media-modal__content").html($(itemData).find('.product-media-modal__content').html());
          $('.slider_media').html('');
          //  $("#product_list").val(product_list);
          $(".common_medias").each(function(){
            var data = $(this).find('.product__media').html()
            $('.slider_media').append('<li>'+data+'</li>');
          });
          $('.slider_media').slick({
            prevArrow: `
              <button class="slide-arrow prev-arrow">
                <span class="screenreader">Previous</span>
                <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.75019 12.1051L7.68603 11.1692L2.86004 6.34323L7.68603 1.51724L6.75019 0.581398L0.988358 6.34323L6.75019 12.1051Z" fill="black"/>
                </svg>
              </button>
            `,
            nextArrow: `
              <button class="slide-arrow next-arrow">
                <span class="screenreader">Next</span>
                <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.24979 0.581417L0.313952 1.51726L5.13995 6.34325L0.313952 11.1692L1.24979 12.1051L7.01163 6.34325L1.24979 0.581417Z" fill="black"/>
                </svg>
              </button>
            `
          });
          $('.slider_media').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            $('video').each(function() {
              $(this).get(0).pause();
            });
          });
          $('.slider_media').on('afterChange', function(event, slick, currentSlide, nextSlide){
            if( $('.slick-current').find('video').length !== 0) {
              $(".slider_media .slick-current video")[0].play();
            }
          });

          
          // Remove aria-describedby from slick slides for desktop
          setTimeout(() => {
            const slickSlides = $('.slider_media').find('.slick-list .slick-slide');
            adaFormatSlickSlides(slickSlides);
          }, 250);

          $(".main-accordions").html($(itemData).find('.main-accordions').html());
          $(".product-form").html($(itemData).find('.product-form').html());
          $(".one-pickup").html($(itemData).find('.one-pickup').html());
          $(".addon-promotion-container").html($(itemData).find('.addon-promotion-container').html());
          $(".two-price").html($(itemData).find('.two-price').html());
          $('#pdp_monthly_price_taxfree_true').html($(itemData).find('#pdp_monthly_price_taxfree_true').html());
          $('#pdp_monthly_price_taxfree_false').html($(itemData).find('#pdp_monthly_price_taxfree_false').html());
          $('#pdp_monthly_price_taxfree_true_2').html($(itemData).find('#pdp_monthly_price_taxfree_true_2').html());
          $(".applecare-replace").html($(itemData).find('.applecare-replace').html());
          $(".secWarranty-replace").html($(itemData).find('.secWarranty-replace').html());
          $(".js-gwp-replace").html($(itemData).find('.js-gwp-replace').html());
          $(".learn_more_sw").html($(itemData).find('.learn_more_sw').html());
          $(".learn_more_apple").html($(itemData).find('.learn_more_apple').html());
          $(".js-sticky-atc").html($(itemData).find('.js-sticky-atc').html());
          $('#stickybar_monthlyprice_1').html($(itemData).find('#stickybar_monthlyprice_1').html());
          $('#stickybar_monthlyprice_2').html($(itemData).find('#stickybar_monthlyprice_2').html());
          $('#stickybar_monthlyprice_3').html($(itemData).find('#stickybar_monthlyprice_3').html());
          $('#url').val($(itemData).find('#url').val());

          $("product-info script[type='module']").each(function () {
            new Function($(this).html())();
          });


          // charger regulation section
          if ($(itemData)?.find('.js-product-charger-regulation')?.length != 0) {
            $(".js-product-charger-regulation").html($(itemData).find('.js-product-charger-regulation').html());
          } else {
            $(".js-product-charger-regulation").empty();
          }

          // energy rating section
          if ($(itemData)?.find('.js-energy-rating')?.length != 0) {
            $(".js-energy-rating").html($(itemData).find('.js-energy-rating').html());
          } else {
            $(".js-energy-rating").empty();
          }
          setTimeout(function () {
            $('variant-radios1').removeClass('var_radio_point_none');
            //$('.loader_pdp_variant_switch').removeClass('active');
            Shopify?.PaymentButton?.init()
          } , 1000);
          // $('.share-button').html($(itemData).find('.share-button').html());
          callOptGa(product_id, product_sku, product_title, product_type, product_price, productcomPrice);
          checkAvailability();
          $(".product-custom-media").css("opacity", "1");
          $(".product__media-list").css("opacity","1");
          function isEmpty(el) {
            return !$.trim(el.html());
          }
          let all_are_hidden1 = true;
          let all_are_hidden2 = true;
          $('#tblNodes').each(function() {
            if (($(this).css('display') !== 'none') || ($('#tblNodes').html() != "")) {
              all_are_hidden1 = false;
              return false;
            }
          });
          if (all_are_hidden1 == true) {
            $(".overviewAccordion").css("display", "none");
          } else {
            $(".overviewAccordion").css("display", "block");
          }
          $('#tblNodes2').each(function() {
            if (($(this).css('display') !== 'none') || ($('#tblNodes2').html() != "")) {
              all_are_hidden2 = false;
              return false;
            }
          });
          if (all_are_hidden2 == true) {
            $(".specificationAccordion").css("display", "none");
          } else {
            $(".specificationAccordion").css("display", "block");
          }

          if (isEmpty($('#tblNodes'))) {
            $(".overviewAccordion").css("display", "none");
          }

          if (isEmpty($('#tblNodes2'))) {
            $(".specificationAccordion").css("display", "none");
          }
          if (all_are_hidden1 == true && all_are_hidden2 == true || $('.specificationAccordion').css('display') == "none" && $('.overviewAccordion').css('display') == "none") {
            $(".container_X").css("display", "none");
          } else {
            $(".container_X").css("display", "block");
          }
          $(".overviewAccordion").trigger("click");

          $("#tradeIn").html($(itemData).find('#tradeIn').html());

          $('.js-net-monthly-pricing-pdp-trigger').on('click', function() {
            if ($('.js-net-monthly-pricing-modal-trigger').length) {
              $('.js-net-monthly-pricing-modal-trigger')[0].click();
            }
          });

          $('#adobeAnalyticsProductData').html($(itemData).find('#adobeAnalyticsProductData').html());

          window.refreshModals();

          if (window.refreshTradeInModal) window.refreshTradeInModal();
          if (window.initTradeInModals) window.initTradeInModals();
          var $featuresValue = document.querySelector('.js-features-value') || null;

          if ($featuresValue) {
            updateFeaturesMarkup($featuresValue);
          }
        }
      });

      // Set first product in 'Product recommendations' section to current product
      /* ----------------------- collapsible-content section(accordion) dynamicall update ----------------------- */
      const accordionSectionIds = [];
      // Select only sections that have the dynamic content section setting.
      $('.collapsible-content-section-wrapper[data-section-content-dynamic="true"]').each(function() {
        accordionSectionIds.push($(this).attr('data-section-id'));
      });

      // Helper function to split the Section IDs into chunks to bupass Shopify Section API limitation
      function chunkArray(array, chunkSize) {
        const chunks = [];
        for (let i = 0; i < array.length; i += chunkSize) {
          chunks.push(array.slice(i, i + chunkSize));
        }
        return chunks;
      }

      // Process the Section IDs array in chunks
      const chunkedSectionIds = chunkArray(accordionSectionIds, 5);

      chunkedSectionIds.forEach((sectionChunk) => {
        $.ajax({
          type: 'GET',
          url: viewurl + `?sections=${sectionChunk.join(',')}`,
          success: function (resp) {
            let itemData = Object.values(resp).join('');
            $('.collapsible-content-section-wrapper').each(function () {
              let sectionId = $(this).attr('data-section-id') || null;
              if (sectionId) {
                $(this).html($(itemData).find(`.collapsible-content-section-wrapper[data-section-id="${sectionId}"]`).html());
              }
            });
          },
        });
      });
      /* -------------------- end of collapsible-content section dynamicall update -------------------- */

      // Update 'Product recommendations' section
      if (productRecommendationsSectionID) {
        const productRecommendationsUrl = `${viewurl}?section_id=${productRecommendationsSectionID}`;
        $.ajax({
          type: 'GET',
          url: productRecommendationsUrl,
          success: function(itemData) {
            $(productRecommendationsSection).html($(itemData).html());
          }
        });
      }
    }
    $(document).on("click",".accordion1",function(event){
      event.preventDefault();
      this.classList.toggle("active_1");
      this.classList.toggle("headerBlu");
      var panel1 = this.nextElementSibling;
      $(panel1.style.maxHeight);
      if (panel1.style.maxHeight) {
        panel1.style.maxHeight = null;
        $(this).find('span').removeClass("svgrotate_2");
      } else {
        panel1.style.maxHeight = panel1.scrollHeight + "px";
        $(this).find('span').addClass("svgrotate_2");
      }
    });
    checkAvailability();
    var color_sw_array = [];
    $('.smart_radio').each(function(){
      color_sw_array.push($(this).val()+$(this).data('option_count'));
    });
    var diff = $(color_sw_array).not(prod_option2).get();
    for(var i=0;i < diff.length;i++) {
      var smartColor = diff[i];
      var convertedText = handleize(smartColor);
      $('label.title-tip-color-swatch.color-swatch.radio-label.'+convertedText).css("display", "none");
      $('label.title-tip.'+convertedText).css("display", "none");

      // Hide inputs for ADA compliance
      const titleTipColorSwatchInput = $('label.title-tip-color-swatch.color-swatch.radio-label.'+convertedText).prev().is('input');
      const titleTipInput = $('label.title-tip-color-swatch.color-swatch.radio-label.'+convertedText).prev().is('input');

      if (titleTipColorSwatchInput) {
        $('label.title-tip-color-swatch.color-swatch.radio-label.'+convertedText).prev().css("display", "none");
      }

      if (titleTipInput) {
        $('label.title-tip-color-swatch.color-swatch.radio-label.'+convertedText).prev().css("display", "none");
      }
    }
    function handleize(str) {
      const normalizedStr = str.normalize('NFD'); // Normalize

      return normalizedStr
        .replace(/\p{Diacritic}/gu, '') // Remove diacritics
        .replace(/[()]/g, '') // Remove parentheses to match Shopify handleize filter functionality
        .replace(/^([^a-zA-Z0-9])*(.*?)/, '$2') // Remove non alphanumeric characters from start and end
        .replace(/([^a-zA-Z0-9])/g, '-') // Replace non alphanumeric characters with hyphen
        .replace(/-+/g, '-') // Replace duplicate hyphens with single hyphen
        .toLowerCase();
    }
    function checkAvailability(){
      var out_of_stock = "Stok habis";
      var not_present = "Tidak tersedia";
      var totalvarients = $('fieldset.product-form__input:not(.product-form__input--trade-in)').length;
      for(var i=0;i<totalvarients;i++) {
        $('.product-form__input').eq(i).find('input').each(function(){
          if (!$(this).is(":checked")) {
            var currelt = '';
            for(var j=0;j<totalvarients;j++) {
              currelt = currelt == '' ? currelt : currelt + '|!';
              if(j == i){
                currelt = currelt  + $(this).data('varient');
              } else {
                currelt = currelt  + $('.product-form__input').eq(j).find('input:checked').data('varient');
              }
            }
            if(prod_option1[currelt] == "false"){
              $(this).addClass('disabled');
              $(this).addClass('disabled-strike');
              $(this).next("label").attr("data-noproduct",out_of_stock);

            }
            if(prod_option1[currelt] == undefined){
              if(($(this).data("option_name") != 'Color')){
                $(this).addClass('disabled');
                $(this).addClass('disabled-cursor');
                $(this).next("label").attr("data-noproduct",not_present);
              }
            }
          }
          if ($(this).is(":checked")) {
            var currelt = '';
            for(var j=0;j<totalvarients;j++) {
              currelt = currelt == '' ? currelt : currelt + '|!';
              if(j == i){
                currelt = currelt  + $(this).data('varient');
              } else {
                currelt = currelt  + $('.product-form__input').eq(j).find('input:checked').data('varient');
              }
            }
            if(prod_option1[currelt] == "false"){
              $(this).addClass('disabled-strike');
              $(this).next("label").attr("data-noproduct",out_of_stock);
            }
            var currelt = $(this).data('varient');
            $(this).closest("fieldset").attr("data-selectedcolor",currelt);
          }
        });
      }
    }
    var product_id= "48898152595774";
    var product_sku = "4710901730444";
    var product_title = "<?php echo $TITLE ?>";
    var product_type = "Perangkat pengisian daya";
    var product_price = "720.00";
    var productcomPrice = "";
    var product_handle = "";
    var mpnhandle = $("#mpn_handle_"+product_id).val();
    callOptGa(product_id,product_sku,product_title,product_type,product_price,productcomPrice);
    function callOptGa(product_id,product_sku,product_title,product_type,product_price,productcomPrice){
      if(localStorage.getItem("product-click")){
        var item_list_name = localStorage.getItem("product-click");
      }else{
        var item_list_name = formatString($("#product_list").val());
      }
      var prevPage= document.referrer;
      if(prevPage.includes("search")){
        var search_value = localStorage.getItem("search_value_term");
        if(localStorage.getItem("product-click")){
          var item_list_name = localStorage.getItem("product-click");
        } else {
          var item_list_name = "Search Results";
        }
      }
      var prodQuant = 1;
      var productCurrency = window.themeJsData.shopCurrency;
      function formatString(str) {
        return str
        .replace(/(\B)[^ ]*/g, match => (match.toLowerCase()))
        .replace(/^[^ ]/g, match => (match.toUpperCase()));
      }
      var productPrice = Number(product_price.replace(/[^0-9.-]+/g,""));
      var value_price = productPrice * parseInt(prodQuant);
      var value_price1 = parseFloat(value_price);
      var productPrice1 = parseFloat(productPrice);
      document.getElementById("product_list")?.setAttribute('value', item_list_name);
      if((prevPage.includes("search")) && (item_list_name == "Search Results")){
        dataLayer.push({ 'ecommerce': null });
        dataLayer.push({
        'event': 'select_item',
          'search_term':search_value,
          'ecommerce': {
            'items': [{
              'item_id': product_sku,
              'item_name': product_title,
              'item_category': product_type,
              'item_list_name' :item_list_name,
              'price': productPrice,
              'quantity':1
            }]
          }
        });
      }

      dataLayer.push({ 'ecommerce': null });
      dataLayer.push({
      'event': 'view_item',
        'search_term':search_value,
        'currency': productCurrency,
        'value': value_price1,
        'ecommerce': {
          'items': [{
            'item_id': product_sku,
            'item_name': product_title,
            'item_category': product_type,
            'item_list_name' :item_list_name,
            'price': productPrice,
            'quantity':1
          }]
        }
      });

    }
    $(".infocircle").click(function(){
      $(".infocircle").removeClass("tooltip-active");
      $(this).addClass("tooltip-active");
      $(".infocircle .inf1").addClass("inf3");
      $(".infocircle .inf2").addClass("inf3");
    });

    function mediaSize_1(className) {
      if (window.matchMedia('(max-width: 1024px)').matches) {
        $(className).css("display", "block");
      } else {
        $(className).css("display", "flex");
      }
    }
    function mediaSize_2(className) {
      if (window.matchMedia('(max-width: 1024px)').matches) {
        $(className).css("display", "block");
      } else {
        $(className).css("display", "inline-flex");
      }
    }

    // Remove aria-describedby from slick slides for mobile
    setTimeout(() => {
      const slickSlides = $('.mobile_media_slider .slider_media').find('.slick-list .slick-slide');
      adaFormatSlickSlides(slickSlides);
    }, 250);

    $('.variant-meta-image').each( function() {
      var elem = $(this).find('img');
      var img_src = $(this).find('img').attr('data-src');
      if(elem.length) {
        getMeta(img_src, elem);
      }
    });
    $('.video').parent().click(function () {
      if($(this).children(".video").get(0).paused){
        $(this).children(".video").get(0).play();
      }else{
        $(this).children(".video").get(0).pause();
      }
    });
      var videos = document.querySelectorAll('video');
      for(var i=0; i<videos.length; i++){
       videos[i].addEventListener('play', function(){pauseAll(this)}, true);
      }
    function pauseAll(elem){
    	for(var i=0; i<videos.length; i++){
        if(videos[i] == elem) continue;
        if(videos[i].played.length > 0 && !videos[i].paused){
          videos[i].pause();
    		}
    	}
    }
    $('.variant-all-image').each( function() {
      $(this).css("display","none");
    });
    $('.variant-meta-image').each( function() {
      $(this).css("display","none");
    });
    $('.is-active').css("display","block");
    $('.product-media-modal__content img').each( function() {
      $(this).hide();
    });
    $('.product-media-modal__content video').each( function() {
      $(this).hide();
    });
    $('.product-media-modal__content deferred-media').each( function() {
      $(this).hide();
    });
    $('.product-media-modal__content deferred-media video').each( function() {
      $(this).hide();
    });
    var c1 = parseInt($(".variant-listed-image-48898152595774").length);
    
      var c2 = 0;
    
    var c3 = c1 + c2;
    
      var c3 = 0;
    
    if(c3 == 0) {
      $(".common_medias").each( function() {
        $(this).css("display","block");
      });
      $(".variant-meta-image").each( function() {
        $(this).css("display","none");
      });

      setTimeout(() => {
        $('.slider_media').slick({
          prevArrow: `
            <button class="slide-arrow prev-arrow">
              <span class="screenreader">Previous</span>
              <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M6.75019 12.1051L7.68603 11.1692L2.86004 6.34323L7.68603 1.51724L6.75019 0.581398L0.988358 6.34323L6.75019 12.1051Z" fill="black"/>
              </svg>
            </button>
          `,
          nextArrow: `
            <button class="slide-arrow next-arrow">
              <span class="screenreader">Next</span>
              <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.24979 0.581417L0.313952 1.51726L5.13995 6.34325L0.313952 11.1692L1.24979 12.1051L7.01163 6.34325L1.24979 0.581417Z" fill="black"/>
              </svg>
            </button>
          `
        });
        $('.slider_media').on('beforeChange', function(event, slick, currentSlide, nextSlide){
          $('video').each(function() {
            $(this).get(0).pause();
          });
        });
        $('.slider_media').on('afterChange', function(event, slick, currentSlide, nextSlide){
          if( $('.slick-current').find('video').length !== 0) {
            $(".slider_media .slick-current video")[0].play();
          }
        });
      }, 500);
      $('.product-media-modal__content img').not('.custom_media_images').each( function() {
        $(this).show();
      });
      $('.product-media-modal__content deferred-media').each( function() {
        $(this).show();
      });
      $('.product-media-modal__content deferred-media video').each( function() {
        $(this).show();
      });
      return;
    }

    $('body').on('click','.frequent-products-checkbox',function() {
      if ($(this).is(':checked')) {
        $(this).siblings('label').html(varselect);
      } else {
        $(this).siblings('label').html(varunselect);
      }
    });

    function resetErrors() {
      var errorMessage = document?.querySelector('.js-qty-error') || null;
      var qtyInput = document?.querySelector('.js-qty-input') || null;

      // reset error messaging
      if (errorMessage) {
        errorMessage.classList.add('hidden');
      }
      if (qtyInput) {
        qtyInput.classList.remove('quantity--error');
      }
    }

    function updateFeaturesMarkup(val) {
      var $container = document.querySelector('.overviewPanel');
      var $list = document.createElement('ul');
      var $content = val.innerHTML;

      if ($content && $content?.length > 0) {
        // Split the content by <br> tag
        var $items = $content.split(/<br\s*\/?>/i);

        if ($items?.length > 0) {
          $items = $items.map((item) => {
            var $listItem = document.createElement('li');
            var trimmedItem = item?.trim() || null;

            if (trimmedItem && trimmedItem !== '​' && trimmedItem?.length > 0) {
              $listItem.innerHTML = trimmedItem;

              // append item to the list
              $list.appendChild($listItem);
            }
          });

          // Clear the existing content
          val.innerHTML = '';
          val.appendChild($list);

          if ($container && $container?.style?.maxHeight) {
            // update the max height of the container to account for the new content
            $container.style.maxHeight = $container.scrollHeight + 'px';
          }
        }
      }
    }
  });
</script>


<script>
  document.addEventListener("DOMContentLoaded", function() {
    $(document).on('click', '#apple-care-add', function (event) {
      var isChecked = $('#add-apple-care').is(':checked');
      if (isChecked) {
        $('#add-apple-care').prop('checked', false);
        $("#apple-care-add .pdp-care-btn").html("Tambah");
        // $("#apple-added-if").val("");
      } else {
        $('#add-apple-care').prop('checked', true);
        $("#apple-care-add .pdp-care-btn").html("Ditambahkan");
        // $("#apple-added-if").val("added");
      }
      var appleCareID = $(this).attr("data-index");
      $("#apple-care-varid").val(appleCareID);
      updatePriceAfterAddingCareOrWarranty();
    });
    $(document).on('click', '.promotion-addon-add', function (event) {
      var promoId = $(this).attr("data-promo-id");
      var checkboxId = '#add-promotion-addon-' + promoId;
      var varIdInput = '#promotion-addon-varid-' + promoId;
      var button = $(this).find('.pdp-care-btn');
      var isChecked = $(checkboxId).is(':checked');
      if (isChecked) {
        $(checkboxId).prop('checked', false);
        button.html("Tambah");
      } else {
        $(checkboxId).prop('checked', true);
        button.html("Ditambahkan");
      }
      var promotionAddonID = $(this).attr("data-index");
      $(varIdInput).val(promotionAddonID);
      updatePriceAfterAddingCareOrWarranty();
    });

    if (document.querySelector('#secWarranty-add')) document.querySelector('#secWarranty-add').addEventListener('click', function (event) {
      var isChecked2 = $('#add-secWarranty').is(':checked');
      if (isChecked2) {
        $('#add-secWarranty').prop('checked', false);
        $("#secWarranty-add .pdp-secWarranty-btn").html("Tambah");
      } else {
        $('#add-secWarranty').prop('checked', true);
        $("#secWarranty-add .pdp-secWarranty-btn").html("Ditambahkan");
        // $("#apple-added-if").val("added");
      }
      var secWarrantyID = $(this).attr("data-index");
      $("#secWarranty-varid").val(secWarrantyID);
      updatePriceAfterAddingCareOrWarranty();
    });

    // Reset trade-in values to 0
    if(document.querySelector('#no-trade-in')) document.querySelector('#no-trade-in').addEventListener('click', function (event) {
      const $tradeInValueAmounts = document.querySelectorAll('.js-trade-in-value-amount');
      const $startTradeInBtn = document.querySelector('.js-product-option-form .js-trade-in-modal-trigger-input');
      const $startTradeInBtnLabel = document.querySelector('.js-product-option-form .js-trade-in-modal-trigger-input + label');
      const $hiddenSelectedTradeIn = document.querySelector('#selected-trade-in-value');
      const $productPrices = document.querySelectorAll('.js-product-price-with-care-warranty');

      $tradeInValueAmounts.forEach(($tradeInValueAmount) => {
        if ($tradeInValueAmount.classList?.contains('pdp-value-amount')) {
          $tradeInValueAmount.innerText = '$0';
          $tradeInValueAmount.setAttribute('data-trade-in-value', 0);
          $tradeInValueAmount.parentElement?.classList?.add('hidden');
        }
      });

      $startTradeInBtnLabel.innerText = 'Start trade-in';
      $hiddenSelectedTradeIn.value = 0;

      updatePriceAfterRemovingTradeIn();
    });

    function updatePriceAfterRemovingTradeIn() {
      const isAppleCareAdded = $('#add-apple-care').is(':checked');
      const isWarrantyAdded = $('#add-secWarranty').is(':checked');
      const isTradeInAdded = document.querySelector('#selected-trade-in-value')?.value;
      const $productPrices = document.querySelectorAll('.js-product-price-with-care-warranty');

      $('.js-product-price-with-care-warranty').each((i, $productPrice) => {
        const price = $($productPrice).data('price');
        let updatedPrice;

        /* TO BE ADDED */
        if (isTradeInAdded && isAppleCareAdded && isWarrantyAdded) {
          updatedPrice = $($productPrice).attr('data-price-with-care-and-secWarranty');
        } else if (isTradeInAdded && isAppleCareAdded) {
          updatedPrice = $($productPrice).attr('data-price-with-care');
        } else if (isTradeInAdded && isWarrantyAdded) {
          updatedPrice = $($productPrice).attr('data-price-with-secWarranty');
        } else if (isTradeInAdded) {
          updatedPrice = price;
        } else {
          updatedPrice = price;
        }

        $($productPrice).html(updatedPrice);
      });
    }

    function updatePriceAfterAddingCareOrWarranty() {
      const isAppleCareAdded = $('#add-apple-care').is(':checked');
      const isWarrantyAdded = $('#add-secWarranty').is(':checked');
      const hasTradeIn = $('#selected-trade-in-value').val() && $('#selected-trade-in-value').val() !== '0' && $("#selected-trade-in-device").val() !== '';
      const hiddenSelectedTradeInValue = $('#selected-trade-in-value').val();
      const tradeInPrice = hiddenSelectedTradeInValue
        ? formatMoney(hiddenSelectedTradeInValue)
        : 0;

      $('.js-product-price-with-care-warranty').each(function(i, $productPrice) {
        let price = $(this).attr('data-price');
        const nmpPriceCalculation = $(this).data('priceCalculation');

        if (isAppleCareAdded && isWarrantyAdded && hasTradeIn) {
          price = setPriceWithTradeIn('data-price-with-care-and-secWarranty', $productPrice);
        } else if (isAppleCareAdded && isWarrantyAdded) {
          price = $(this).attr('data-price-with-care-and-secWarranty');
        } else if (isAppleCareAdded && hasTradeIn) {
          price = setPriceWithTradeIn('data-price-with-care', $productPrice);
        } else if (isWarrantyAdded && hasTradeIn) {
          price = setPriceWithTradeIn('data-price-with-secWarranty', $productPrice);
        } else if (isAppleCareAdded) {
          price = $(this).attr('data-price-with-care');
        } else if (isWarrantyAdded) {
          price = $(this).attr('data-price-with-secWarranty');
        } else if (hasTradeIn) {
          price = setPriceWithTradeIn('data-price', $productPrice);
        }

        if ($('#addon-promotion-product .add-on-product-checkbox').is(':checked')) {
          var addOnValues = $('#addon-promotion-product .add-on-product-checkbox:checked').map(function () {
              return formatMoney($(this).data('price'));
          }).get();

          const amountToAdd = addOnValues.reduce((sum, price) => sum + price, 0);
          const isNMP = !$(this).hasClass('actual_price_bold');

          if (isNMP) {
            const nmpPriceCalculationEl = parseInt($(this).attr('data-price-calculation'));
            price = formatPriceWithoutCurrency((formatMoney(price) + amountToAdd / nmpPriceCalculation).toFixed(2))
          } else {

            const targetValue = formatMoney(price);
            const sum = targetValue + amountToAdd;
            price = formatPriceWithCurrency(sum);
          }
        }

        $(this).html(price);
      });
    }

    function setCookie(name, value, days) {
      var expires = "";
      if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
      }
      document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function getCookie(name) {
      var nameEQ = name + "=";
      var ca = document.cookie.split(';');
      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
      }
      return null;
    }

    function eraseCookie(name) {
      document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }

    //added by anusha - 4th variant option cookie approach - start

    //check if the main product is inside 4th option product list. if its present, set cookie array
    var pid = "10856143159614";
    var pid1 = "";
    var pid1 = pid1.replace(/\s/g, "");
    var pid2 = pid1.split('-');
    var count = 0;
    for (var j = 0; j < pid2.length; j++) {
      var a = pid2[j];
      var b = pid;
      if (a.trim() == b.trim()) {
        count++;
      }
    }
    if (count > 0) {
      setCookie('optionPIDlist', pid2.join('|'), {
        path: '/'
      });
    }

    // if the main product has 'empty 4th product list', then delete all the cookies
    if (!pid1.length > 0) {
      eraseCookie('option1select');
      eraseCookie('option2select');
      eraseCookie('option3select');
      eraseCookie('optionPIDlist');
    }

    // cookie values - 3 options
    let op1 = getCookie('option1select');
    let op2 = getCookie('option2select');
    let op3 = getCookie('option3select');

    // when customer change the 4th option selection - trigger click event (inorder to set cookie values for 3 options)
    if (op1 && $('fieldset.product-form__input[data-opcount="1"]').length > 0) {
      setTimeout(function() {
        $('fieldset.product-form__input[data-opcount="1"]').find('label[data-title="' + op1 + '"]').trigger('click');
      }, 1000);
    };
    if (op2 && $('fieldset.product-form__input[data-opcount="2"]').length > 0) {
      setTimeout(function() {
        $('fieldset.product-form__input[data-opcount="2"]').find('label[data-title="' + op2 + '"]').trigger('click');
      }, 1000);
    };
    if (op3 && $('fieldset.product-form__input[data-opcount="3"]').length > 0) {
      setTimeout(function() {
        $('fieldset.product-form__input[data-opcount="3"]').find('label[data-title="' + op3 + '"]').trigger('click');
      }, 1000);
    };

    let op11 = $("input[type='radio'][name='Title']:checked").val();
    let op22 = $("input[type='radio'][name='']:checked").val();
    let op33 = $("input[type='radio'][name='']:checked").val();

    // when customer dont click on any of the variant buttons - set cookie values for 3 options from current mainprod variant selection
    if (op1 == null && op2 == null && op3 == null) {
      if (op11 && $('fieldset.product-form__input[data-opcount="1"]').length > 0) {
        setTimeout(function() {
          $('fieldset.product-form__input[data-opcount="1"]').find('label[data-title="' + op11 + '"]').trigger('click');
        }, 1000);
      };
      if (op22 && $('fieldset.product-form__input[data-opcount="2"]').length > 0) {
        setTimeout(function() {
          $('fieldset.product-form__input[data-opcount="2"]').find('label[data-title="' + op22 + '"]').trigger('click');
        }, 1000);
      };
      if (op33 && $('fieldset.product-form__input[data-opcount="3"]').length > 0) {
        setTimeout(function() {
          $('fieldset.product-form__input[data-opcount="3"]').find('label[data-title="' + op33 + '"]').trigger('click');
        }, 1000);
      };
      if (getCookie('optionPIDlist')) {
        setCookie('option1select', op11, 7);
        setCookie('option2select', op22, 7);
        setCookie('option3select', op33, 7);
      }
    }
    // added by anusha - 4th variant option cookie approach - end

    if (vat_free_day == true) {
      var vat_price_footer = $(".pricestyle").find(".vat_price_bold").text();
      if (vat_price_footer != "") {
        $("#price-element").find(".footerOr2").css("display", "none");
      }
    }
  });

  document.querySelectorAll('input[type="number"]').forEach(input => {
    input.addEventListener("change", function(event) {
      this.value = this.value.replace(/[^0-9]+/g, '');
      if (this.value < 1) this.value = 0;
    })
  })

  document.querySelectorAll('input[type="number"]').forEach(input => {
    input.addEventListener("keypress", function(event) {
      if (
      (event.target.value.length == 0 && event.which == 48) ||
      (event.target.value.length == 0 && event.which > 31 && event.which < 48) ||
      (event.target.value.length == 0 && event.which > 57 && event.which < 128)
    ) {
      return false;
    }
    })
  })

  document.querySelectorAll('input[type="number"]').forEach(input => {
    input.addEventListener("keypress", function(event) {
      return (((event.which > 47) && (event.which < 58)) || (event.which == 13));

    })
  })

  // reload page on back button click since the cached version on Safari browsers is incorrect
  window.addEventListener('pageshow', function(event) {
    if (event.persisted) {
      window.location.reload();
    }
  });
</script>



</section><div id="shopify-section-template--21423358214462__productMarketingContent" class="shopify-section"><link href="https://www.istudio.store/cdn/shop/t/4/assets/productMarketingContent.css?v=90034947721969877641753282911" rel="stylesheet" type="text/css" media="all" />




<style>
  .popup-container iframe {
    margin-left: -45px !important;
    width: 110% !important;
    height: 100% !important;
    border: none;
  }

  @media screen and (max-width: 1023px) {
    .popup-container iframe {
      width: 100% !important;
      margin-left: auto !important;
      margin-right: auto !important;
    }
  }
</style>
</div><section id="shopify-section-template--21423358214462__frequently-bought-products" class="shopify-section section slider-container"><style data-shopify>.section-template--21423358214462__frequently-bought-products-padding {
    padding-top: 27px;
    padding-bottom: 0px;
  }
  @media screen and (min-width: 750px) {
    .section-template--21423358214462__frequently-bought-products-padding {
      padding-top: 36px;
      padding-bottom: 0px;
    }
  }

  #shopify-section-template--21423358214462__frequently-bought-products .button-cart-frequent.hide {
    animation: hide 0.4s ease-in-out forwards;
  }

  @keyframes hide {
    0% {
      opacity: 1;
      display: block;
    }
    100% {
      opacity: 0;
      display: none;
    }
  }</style><link rel="stylesheet" href="https://www.istudio.store/cdn/shop/t/4/assets/product-scratch.css?v=30563334152020827841754478114" media="print" onload="this.media='all'">

<div class="frequent-products" data-section-id="template--21423358214462__frequently-bought-products">
  <product-recommendations
    class="product-recommendations1 page-width section-template--21423358214462__frequently-bought-products-padding isolate apl-section-frequently-bought-products"
    data-url="/recommendations/products?section_id=template--21423358214462__frequently-bought-products&product_id=10856143159614&limit=3"
  >
    
    
    <div
      class="product-recommendations__cta hidden"
      style="height:0px;"
    >
      <input type="hidden" id="prod_currency" value="IDR">
      <button
        type="submit"
        class="button-cart-frequent card-btn-1 product-form__submit button button--full-width js-frequent-submit apl-section-frequently-bought-products-card-atc"
        id="card-button"
        class="frq-card-btn"
      >
        Tambah&nbsp; <span id="checked-products"> </span> &nbsp;produk ke keranjang
        <div class="loading-overlay__spinner-frequent hidden">
          <svg
            aria-hidden="true"
            focusable="false"
            role="presentation"
            class="spinner"
            viewBox="0 0 66 66"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
          </svg>
        </div>
      </button>
    </div>
  </product-recommendations>
</div>
<script>
  class ProductRecommendations extends HTMLElement {
    constructor() {
      super();
      this.config = {
        dom: {
          button: '.js-frequent-submit',
          input: '.js-frequent-products-checkbox',
          selected: 'input[name="frequent-products-pdp"]:checked',
        },
        cls: {
          hide: 'hide',
        },
      };
      const handleIntersection = (entries, observer) => {
        if (!entries[0].isIntersecting) return;
        observer.unobserve(this);
        fetch(this.dataset.url)
          .then((response) => response.text())
          .then((text) => {
            const html = document.createElement('div');
            html.innerHTML = text;
            const recommendations = html.querySelector('product-recommendations');
            if (recommendations && recommendations.innerHTML.trim().length) {
              this.innerHTML = recommendations.innerHTML;
            }
            if (html.querySelector('.grid__item')) {
              this.classList.add('product-recommendations--loaded');
            }

            this.addEvent();
            call_gafunction();
          })
          .catch((e) => {
            console.error(e);
          });
      };
      new IntersectionObserver(handleIntersection.bind(this), { rootMargin: '0px 0px 200px 0px' }).observe(this);
    }
    hideButton(el) {
      if (!el) return;
      el.classList.add(this.config.cls.hide);
    }
    showButton(el) {
      if (!el) return;
      el.classList.remove(this.config.cls.hide);
    }
    updateButtonState(show = true) {
      const $button = this.querySelector(this.config.dom.button) || null;
      if (!$button) return;

      if (show) {
        this.showButton($button);
      } else {
        this.hideButton($button);
      }
    }
    addEvent() {
      const $inputs = this.querySelectorAll(this.config.dom.input) || [];
      // bind modals
      if (window?.refreshModals) { 
        window.refreshModals();
      }
      if (!$inputs?.length > 0) return;
      [...$inputs].forEach(($input) => {
        $input.addEventListener('change', () => {
          const $selected = this.querySelector(this.config.dom.selected) || null;

          if ($selected) {
            this.updateButtonState();
          } else {
            this.updateButtonState(false);
          }
        });
      });
    }
  }
  if (!customElements.get('product-recommendations')) {
    customElements.define('product-recommendations', ProductRecommendations);
  }

  function call_gafunction() {
    var mpn_handle = $('#mpn_handle').val();
    var frequentProducts_ga = [];
    var productList = 'Shopify Rec :: ' + mpn_handle;
    $.each($("input[name='frequent-products-pdp']"), function () {
      var prodtitle = $('#title_' + $(this).val()).val();
      var prodMPN = $('#product_mpn_handle_' + $(this).val()).val();
      var prodType = $('.card_product_category_' + $(this).val()).val();
      var prodCurrency = $('.card_product_currency_' + $(this).val()).attr('value');
      var prodPrice = $('.card_product_price_' + $(this).val()).attr('value');
      var prodSku = $('.card_product_sku_' + $(this).val()).attr('value');
      var compareprice = $('.card_product_compare_' + $(this).val()).attr('value');
      prodPrice = Number(prodPrice.replace(/[^0-9.-]+/g, ''));
      var discount = 0;
      if (compareprice != '') {
        compareprice = Number(compareprice.replace(/[^0-9.-]+/g, ''));
        discount = parseFloat(compareprice) - parseFloat(prodPrice);
        discount = parseFloat(discount);
        // prodPrice = compareprice;
      }
      var productPrice1 = parseFloat(prodPrice);
      item_ga = {};
      item_ga['item_id'] = prodSku;
      item_ga['item_name'] = prodtitle;
      item_ga['item_category'] = prodType;
      item_ga['item_list_name'] = productList;
      item_ga['price'] = prodPrice;
      item_ga['quantity'] = 1;
      frequentProducts_ga.push(item_ga);
    });
    if (frequentProducts_ga.length != 0) {
      dataLayer.push({ ecommerce: null });
      dataLayer.push({
        event: 'view_item_list',
        ecommerce: {
          item_list_name: productList,
          items: frequentProducts_ga,
        },
      });
    }
  }
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() { 
    $(window).on('scroll', function () {
      if (
        $(window).scrollTop() >=
        $('.product-recommendations1').offset().top + $('.product-recommendations1').outerHeight() - window.innerHeight
      ) {
        setTimeout(function () {
          var checkLength = $("input[name='frequent-products-pdp']:checked").length;
          var productRecs = document.querySelector('.product-recommendations1');

          $('#checked-products').text(checkLength);
        }, 4000);
        setTimeout(function () {
          var height;
          var maxheight = 0;
          var minheight = 0;
          $('.price_container_cal').each(function () {
            height = parseInt($(this).height());
            if (height > maxheight) {
              maxheight = height;
            } else {
              minheight = height;
            }
          });
          let isMobile = window.matchMedia('only screen and (max-width: 1023px)').matches;
          if (!isMobile) {
            if (maxheight >= minheight) {
              $('.price_container_cal').attr(
                'style',
                'display: flex; flex-flow: column; justify-content: flex-end; height:' + maxheight + 'px;'
              );
            }
          }
        }, 500);
      }
    });
  });
</script>


      
    </main><!-- BEGIN sections: footer-group -->
<section id="shopify-section-sections--22990403699006__custom_liquid_EVbhEa" class="shopify-section shopify-section-group-footer-group section"><style data-shopify>.section-sections--22990403699006__custom_liquid_EVbhEa-padding {
    padding-top: calc(0px * 0.75);
    padding-bottom: calc(0px  * 0.75);
  }

  @media screen and (min-width: 750px) {
    .section-sections--22990403699006__custom_liquid_EVbhEa-padding {
      padding-top: 0px;
      padding-bottom: 0px;
    }
  }</style><div class="color-background-1 gradient apl-section-custom-liquid">
  <div class="section-sections--22990403699006__custom_liquid_EVbhEa-padding">
    <script src="https://mstatic.priceza.com/js/tracking-3.0.js" async></script>
  </div>
</div>


</section><div id="shopify-section-sections--22990403699006__footer" class="shopify-section shopify-section-group-footer-group">


<link href="https://www.istudio.store/cdn/shop/t/4/assets/section-footer.css?v=31082560784225496851753282910" rel="stylesheet" type="text/css" media="all" />
<link href="https://www.istudio.store/cdn/shop/t/4/assets/component-newsletter.css?v=62710185773136453051753282911" rel="stylesheet" type="text/css" media="all" />
<link href="https://www.istudio.store/cdn/shop/t/4/assets/component-list-menu.css?v=104864129994713251501721821279" rel="stylesheet" type="text/css" media="all" />
<link href="https://www.istudio.store/cdn/shop/t/4/assets/component-list-payment.css?v=176967998584360591851721821278" rel="stylesheet" type="text/css" media="all" />
<link href="https://www.istudio.store/cdn/shop/t/4/assets/component-list-social.css?v=35792976012981934991721821278" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.footer {
    margin-top: 18px;
  }

  .active_2, .accordion2:after {
    color: #121212;
  }

  .section-sections--22990403699006__footer-padding {
    /* padding-top: 0px; */
    padding-bottom: 0px;
  }

  @media screen and (min-width: 750px) {
    .footer {
      margin-top: 24px;
    }

    .section-sections--22990403699006__footer-padding {
      padding-top: 0px;
      padding-bottom: 0px;
    }
  }</style><footer class="footer color-background-1 gradient section-sections--22990403699006__footer-padding apl-section-footer">
<div id="footerAccordion" class="accordionpadding page-width ">
      <div class="borderTop">
        
          <div
            class="accordion2 "
            type="button"
            tabindex="0"
          >
            <span class="headerBlu footer-block__heading">Shop</span>
            <span class="caretfooter">
              <svg
                aria-hidden="true"
                focusable="false"
                role="presentation"
                class="footercareticon icon icon-caret "
                viewBox="0 0 10 6"
              >
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor" class="footercareticon">
                </path>
              </svg>
            </span>
          </div>
          <div class="panel2"><ul class="footer-block__details-content list-unstyled"><li>
                        <a
                          href="/pages/view-all-mac"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Mac
                        </a>
                      </li><li>
                        <a
                          href="/pages/view-all-ipad"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          iPad
                        </a>
                      </li><li>
                        <a
                          href="/pages/view-all-iphone"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          iPhone
                        </a>
                      </li><li>
                        <a
                          href="/pages/view-all-watch"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Watch
                        </a>
                      </li><li>
                        <a
                          href="/pages/view-all-music"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Music
                        </a>
                      </li><li>
                        <a
                          href="/pages/view-all-tv-and-home"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          TV dan Rumah
                        </a>
                      </li><li>
                        <a
                          href="/pages/view-all-accessories"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Aksesori
                        </a>
                      </li></ul></div>
        
          <div
            class="accordion2 "
            type="button"
            tabindex="0"
          >
            <span class="headerBlu footer-block__heading">Services</span>
            <span class="caretfooter">
              <svg
                aria-hidden="true"
                focusable="false"
                role="presentation"
                class="footercareticon icon icon-caret "
                viewBox="0 0 10 6"
              >
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor" class="footercareticon">
                </path>
              </svg>
            </span>
          </div>
          <div class="panel2"><ul class="footer-block__details-content list-unstyled"><li>
                        <a
                          href="/pages/all-workshop"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Kegiatan workshop
                        </a>
                      </li><li>
                        <a
                          href="/pages/group-demo"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Demo penggunaan
                        </a>
                      </li><li>
                        <a
                          href="/pages/one-on-one-training"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Kursus pelatihan online privat
                        </a>
                      </li><li>
                        <a
                          href="/pages/bank-promotion-online"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Promo kartu kredit (online)
                        </a>
                      </li><li>
                        <a
                          href="/pages/bank-promotion-store"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Promo kartu kredit (toko offline)
                        </a>
                      </li><li>
                        <a
                          href="/pages/nonbank-finance-istudio"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Cicilan tanpa kartu (iStudio)
                        </a>
                      </li><li>
                        <a
                          href="/pages/nonbank-finance-u-store"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Cicilan tanpa kartu (U.Store)
                        </a>
                      </li><li>
                        <a
                          href="/pages/trade-in-program"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Upgrade perangkat lama ke perangkat baru
                        </a>
                      </li><li>
                        <a
                          href="/pages/news-and-promotion"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Berita dan promosi
                        </a>
                      </li><li>
                        <a
                          href="/pages/blog"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Artikel
                        </a>
                      </li></ul></div>
        
          <div
            class="accordion2 "
            type="button"
            tabindex="0"
          >
            <span class="headerBlu footer-block__heading">About</span>
            <span class="caretfooter">
              <svg
                aria-hidden="true"
                focusable="false"
                role="presentation"
                class="footercareticon icon icon-caret "
                viewBox="0 0 10 6"
              >
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor" class="footercareticon">
                </path>
              </svg>
            </span>
          </div>
          <div class="panel2"><ul class="footer-block__details-content list-unstyled"><li>
                        <a
                          href="/pages/about-istudio"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Tentang Copperwired
                        </a>
                      </li><li>
                        <a
                          href="/pages/we-are-hiring"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Karier
                        </a>
                      </li><li>
                        <a
                          href="/pages/copper-member-condition"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Tentang member
                        </a>
                      </li><li>
                        <a
                          href="/pages/contact-us-istudio"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Hubungi kami
                        </a>
                      </li><li>
                        <a
                          href="/pages/store-locator"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Cari toko iStudio
                        </a>
                      </li><li>
                        <a
                          href="/pages/ustore-location"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Cari toko U-Store
                        </a>
                      </li><li>
                        <a
                          href="/pages/iserve-location"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Cari toko iServe
                        </a>
                      </li><li>
                        <a
                          href="/pages/iserve"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Pusat layanan iServe
                        </a>
                      </li></ul></div>
        
          <div
            class="accordion2 "
            type="button"
            tabindex="0"
          >
            <span class="headerBlu footer-block__heading">Policies</span>
            <span class="caretfooter">
              <svg
                aria-hidden="true"
                focusable="false"
                role="presentation"
                class="footercareticon icon icon-caret "
                viewBox="0 0 10 6"
              >
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor" class="footercareticon">
                </path>
              </svg>
            </span>
          </div>
          <div class="panel2"><ul class="footer-block__details-content list-unstyled"><li>
                        <a
                          href="/pages/service-qa"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Cara klaim produk
                        </a>
                      </li><li>
                        <a
                          href="/pages/return-policy"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Kebijakan pengembalian produk
                        </a>
                      </li><li>
                        <a
                          href="/pages/service-qa"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Pertanyaan umum
                        </a>
                      </li><li>
                        <a
                          href="/pages/online-shopping-policy"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Pembayaran dan pengiriman
                        </a>
                      </li><li>
                        <a
                          href="/pages/istudio-privacy-policy"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Kebijakan privasi
                        </a>
                      </li><li>
                        <a
                          href="/pages/shopping-term-and-condition"
                          class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                        >
                          Syarat dan ketentuan perusahaan
                        </a>
                      </li></ul></div>
        
          <div
            class="accordion2 "
            type="button"
            tabindex="0"
          >
            <span class="headerBlu footer-block__heading">Apple Premium Partner</span>
            <span class="caretfooter">
              <svg
                aria-hidden="true"
                focusable="false"
                role="presentation"
                class="footercareticon icon icon-caret "
                viewBox="0 0 10 6"
              >
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor" class="footercareticon">
                </path>
              </svg>
            </span>
          </div>
          <div class="panel2">
                <div class="subtext_css footer-block__details-content rte">
                  
                </div></div>
        
        
          
        
          
        
          
        
          
        
          
              <div class="footer_logosMobile">
                <div class="footerLogo  apl-section-footer-logo"><div
                      class="ratio"
                      style="--ratio-percent: 46.97508896797152%"
                    >
                      <img
                        srcset="https://www.istudio.store/cdn/shop/files/Prenium_Partner_100x.svg?v=1714991846, https://www.istudio.store/cdn/shop/files/Prenium_Partner_100x@2x.svg?v=1714991846 2x"
                        src="https://www.istudio.store/cdn/shop/files/Prenium_Partner_400x.svg?v=1714991846"
                        
                          alt
                          aria-hidden="true"
                        
                        loading="lazy"
                        width="100"
                        height="auto"
                        style="max-width: min(100%, 100px);"
                      >
                    </div></div>
                <div class="footerLogo  apl-section-footer-logo"><div
                      class="ratio"
                      style="--ratio-percent: 25.396825396825395%"
                    >
                      <img
                        srcset="https://www.istudio.store/cdn/shop/files/Authorized_Service_Provider_130x.svg?v=1714991846, https://www.istudio.store/cdn/shop/files/Authorized_Service_Provider_130x@2x.svg?v=1714991846 2x"
                        src="https://www.istudio.store/cdn/shop/files/Authorized_Service_Provider_400x.svg?v=1714991846"
                        
                          alt
                          aria-hidden="true"
                        
                        loading="lazy"
                        width="130"
                        height="auto"
                        style="max-width: min(100%, 130px);"
                      >
                    </div></div>
                <div class="footerLogo  apl-section-footer-logo"><div
                      class="ratio"
                      style="--ratio-percent: 23.208191126279864%"
                    >
                      <img
                        srcset="https://www.istudio.store/cdn/shop/files/Authorized_Education_Specialist_130x.svg?v=1714991848, https://www.istudio.store/cdn/shop/files/Authorized_Education_Specialist_130x@2x.svg?v=1714991848 2x"
                        src="https://www.istudio.store/cdn/shop/files/Authorized_Education_Specialist_400x.svg?v=1714991848"
                        
                          alt
                          aria-hidden="true"
                        
                        loading="lazy"
                        width="130"
                        height="auto"
                        style="max-width: min(100%, 130px);"
                      >
                    </div></div>
              </div>
          
        
      </div>
    </div>
  
<div class="footer__content-top page-width"><div
              class="js-footer-blocks-wrapper footer__blocks-wrapper grid grid--1-col grid--2-col grid--4-col-tablet grid--5-col-desktop grid--5-col-desktop"
              
            ><div
                  class="footer-block grid__item footer-block--menu"
                  
                  
                ><p class="footer-block__heading inline-richtext apl-section-footer-heading">Shop</p><ul class="footer-block__details-content list-unstyled"><li>
                              <a
                                href="/pages/view-all-mac"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Mac
                              </a>
                            </li><li>
                              <a
                                href="/pages/view-all-ipad"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                iPad
                              </a>
                            </li><li>
                              <a
                                href="/pages/view-all-iphone"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                iPhone
                              </a>
                            </li><li>
                              <a
                                href="/pages/view-all-watch"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Watch
                              </a>
                            </li><li>
                              <a
                                href="/pages/view-all-music"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Music
                              </a>
                            </li><li>
                              <a
                                href="/pages/view-all-tv-and-home"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                TV dan Rumah
                              </a>
                            </li><li>
                              <a
                                href="/pages/view-all-accessories"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Aksesori
                              </a>
                            </li></ul></div><div
                  class="footer-block grid__item footer-block--menu"
                  
                  
                ><p class="footer-block__heading inline-richtext apl-section-footer-heading">Services</p><ul class="footer-block__details-content list-unstyled"><li>
                              <a
                                href="/pages/all-workshop"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Kegiatan workshop
                              </a>
                            </li><li>
                              <a
                                href="/pages/group-demo"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Demo penggunaan
                              </a>
                            </li><li>
                              <a
                                href="/pages/one-on-one-training"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Kursus pelatihan online privat
                              </a>
                            </li><li>
                              <a
                                href="/pages/bank-promotion-online"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Promo kartu kredit (online)
                              </a>
                            </li><li>
                              <a
                                href="/pages/bank-promotion-store"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Promo kartu kredit (toko offline)
                              </a>
                            </li><li>
                              <a
                                href="/pages/nonbank-finance-istudio"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Cicilan tanpa kartu (iStudio)
                              </a>
                            </li><li>
                              <a
                                href="/pages/nonbank-finance-u-store"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Cicilan tanpa kartu (U.Store)
                              </a>
                            </li><li>
                              <a
                                href="/pages/trade-in-program"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Upgrade perangkat lama ke perangkat baru
                              </a>
                            </li><li>
                              <a
                                href="/pages/news-and-promotion"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Berita dan promosi
                              </a>
                            </li><li>
                              <a
                                href="/pages/blog"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Artikel
                              </a>
                            </li></ul></div><div
                  class="footer-block grid__item footer-block--menu"
                  
                  
                ><p class="footer-block__heading inline-richtext apl-section-footer-heading">About</p><ul class="footer-block__details-content list-unstyled"><li>
                              <a
                                href="/pages/about-istudio"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Tentang Copperwired
                              </a>
                            </li><li>
                              <a
                                href="/pages/we-are-hiring"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Karier
                              </a>
                            </li><li>
                              <a
                                href="/pages/copper-member-condition"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Tentang member
                              </a>
                            </li><li>
                              <a
                                href="/pages/contact-us-istudio"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Hubungi kami
                              </a>
                            </li><li>
                              <a
                                href="/pages/store-locator"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Cari toko iStudio
                              </a>
                            </li><li>
                              <a
                                href="/pages/ustore-location"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Cari toko U-Store
                              </a>
                            </li><li>
                              <a
                                href="/pages/iserve-location"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Cari toko iServe
                              </a>
                            </li><li>
                              <a
                                href="/pages/iserve"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Pusat layanan iServe
                              </a>
                            </li></ul></div><div
                  class="footer-block grid__item footer-block--menu"
                  
                  
                ><p class="footer-block__heading inline-richtext apl-section-footer-heading">Policies</p><ul class="footer-block__details-content list-unstyled"><li>
                              <a
                                href="/pages/service-qa"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Cara klaim produk
                              </a>
                            </li><li>
                              <a
                                href="/pages/return-policy"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Kebijakan pengembalian produk
                              </a>
                            </li><li>
                              <a
                                href="/pages/service-qa"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Pertanyaan umum
                              </a>
                            </li><li>
                              <a
                                href="/pages/online-shopping-policy"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Pembayaran dan pengiriman
                              </a>
                            </li><li>
                              <a
                                href="/pages/istudio-privacy-policy"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Kebijakan privasi
                              </a>
                            </li><li>
                              <a
                                href="/pages/shopping-term-and-condition"
                                class="footer_content_list link link--text list-menu__item list-menu__item--link apl-section-footer-link"
                              >
                                Syarat dan ketentuan perusahaan
                              </a>
                            </li></ul></div><div
                  class="footer-block grid__item"
                  
                  
                ><p class="footer-block__heading inline-richtext apl-section-footer-heading">Apple Premium Partner</p>
<div class="footer_logos footer_logos--no-subtext">
                        <div class="footerLogo  apl-section-footer-logo"><div
                              class="ratio"
                              style="--ratio-percent: 46.97508896797152%"
                            >
                              <img
                                srcset="https://www.istudio.store/cdn/shop/files/Prenium_Partner_100x.svg?v=1714991846, https://www.istudio.store/cdn/shop/files/Prenium_Partner_100x@2x.svg?v=1714991846 2x"
                                src="https://www.istudio.store/cdn/shop/files/Prenium_Partner_400x.svg?v=1714991846"
                                
                                  alt
                                  aria-hidden="true"
                                
                                loading="lazy"
                                width="100"
                                height="auto"
                                style="max-width: min(100%, 100px);"
                              >
                            </div></div>
                        <div class="footerLogo  apl-section-footer-logo"><div
                              class="ratio"
                              style="--ratio-percent: 25.396825396825395%"
                            >
                              <img
                                srcset="https://www.istudio.store/cdn/shop/files/Authorized_Service_Provider_130x.svg?v=1714991846, https://www.istudio.store/cdn/shop/files/Authorized_Service_Provider_130x@2x.svg?v=1714991846 2x"
                                src="https://www.istudio.store/cdn/shop/files/Authorized_Service_Provider_400x.svg?v=1714991846"
                                
                                  alt
                                  aria-hidden="true"
                                
                                loading="lazy"
                                width="130"
                                height="auto"
                                style="max-width: min(100%, 130px);"
                              >
                            </div></div>
                        <div class="footerLogo  apl-section-footer-logo"><div
                              class="ratio"
                              style="--ratio-percent: 23.208191126279864%"
                            >
                              <img
                                srcset="https://www.istudio.store/cdn/shop/files/Authorized_Education_Specialist_130x.svg?v=1714991848, https://www.istudio.store/cdn/shop/files/Authorized_Education_Specialist_130x@2x.svg?v=1714991848 2x"
                                src="https://www.istudio.store/cdn/shop/files/Authorized_Education_Specialist_400x.svg?v=1714991848"
                                
                                  alt
                                  aria-hidden="true"
                                
                                loading="lazy"
                                width="130"
                                height="auto"
                                style="max-width: min(100%, 130px);"
                              >
                            </div></div>
                      </div></div></div><div
          class="page-width footer_newsletter_icon_section"
          
        ><div class="footer-block__newsletter apl-section-footer-newsletter"><p class="footer-block__heading2 inline-richtext apl-section-footer-newsletter-title">Subscribe to our emails</p><form method="post" action="/contact#ContactFooter" id="ContactFooter" accept-charset="UTF-8" class="footer__newsletter newsletter-form apl-section-footer-newsletter-form"><input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="contact[tags]" value="newsletter">
                <div class="emailTextBoxFooter1 newsletter-form__field-wrapper">
                  <div class="field">
                    <input
                      id="NewsletterForm--sections--22990403699006__footer"
                      type="email"
                      name="contact[email]"
                      class="emailTextBoxFooter1 field__input"
                      value=""
                      aria-required="true"
                      autocorrect="off"
                      autocapitalize="off"
                      autocomplete="email"
                      
                      placeholder="Email"
                      required
                    >
                    <label class="email_label_css field__label" for="NewsletterForm--sections--22990403699006__footer">
                      Email
                    </label>
                    <button
                      type="submit"
                      class="newsletter-form__button field__button"
                      name="commit"
                      id="Subscribe"
                      aria-label="Berlangganan info"
                      data-form-type="footer-newsletter"
                    >
                      <svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="footer_mail_arrow icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>

                    </button>
                  </div></div></form></div><div class="footer__content-bottom">
            <div class="footer__content-bottom-wrapper ">
              <div class=" footer__column footer__column--info"><ul class="ulClassSocialIcon footer__list-social list-unstyled list-social apl-section-social-media"><li class="social_icon_footer list-social__item-f">
                        <a
                          href="https://www.facebook.com/iStudiobycopperwired/"
                          class="social_icon_anchor link list-social__link"
                        ><svg aria-hidden="true" focusable="false" class="icon icon-facebook" viewBox="0 0 20 20">
  <path fill="currentColor" d="M18 10.049C18 5.603 14.419 2 10 2c-4.419 0-8 3.603-8 8.049C2 14.067 4.925 17.396 8.75 18v-5.624H6.719v-2.328h2.03V8.275c0-2.017 1.195-3.132 3.023-3.132.874 0 1.79.158 1.79.158v1.98h-1.009c-.994 0-1.303.621-1.303 1.258v1.51h2.219l-.355 2.326H11.25V18c3.825-.604 6.75-3.933 6.75-7.951Z"/>
</svg>
<span class="visually-hidden">Facebook</span>
                        </a>
                      </li><li class="social_icon_footer list-social__item-f">
                        <a
                          href="https://www.instagram.com/istudiobycopperwired/"
                          class="social_icon_anchor link list-social__link"
                        ><svg aria-hidden="true" focusable="false" class="icon icon-instagram" viewBox="0 0 20 20">
  <path fill="currentColor" fill-rule="evenodd" d="M13.23 3.492c-.84-.037-1.096-.046-3.23-.046-2.144 0-2.39.01-3.238.055-.776.027-1.195.164-1.487.273a2.43 2.43 0 0 0-.912.593 2.486 2.486 0 0 0-.602.922c-.11.282-.238.702-.274 1.486-.046.84-.046 1.095-.046 3.23 0 2.134.01 2.39.046 3.229.004.51.097 1.016.274 1.495.145.365.319.639.602.913.282.282.538.456.92.602.474.176.974.268 1.479.273.848.046 1.103.046 3.238.046 2.134 0 2.39-.01 3.23-.046.784-.036 1.203-.164 1.486-.273.374-.146.648-.329.921-.602.283-.283.447-.548.602-.922.177-.476.27-.979.274-1.486.037-.84.046-1.095.046-3.23 0-2.134-.01-2.39-.055-3.229-.027-.784-.164-1.204-.274-1.495a2.43 2.43 0 0 0-.593-.913 2.604 2.604 0 0 0-.92-.602c-.284-.11-.703-.237-1.488-.273ZM6.697 2.05c.857-.036 1.131-.045 3.302-.045 1.1-.014 2.202.001 3.302.045.664.014 1.321.14 1.943.374a3.968 3.968 0 0 1 1.414.922c.41.397.728.88.93 1.414.23.622.354 1.279.365 1.942C18 7.56 18 7.824 18 10.005c0 2.17-.01 2.444-.046 3.292-.036.858-.173 1.442-.374 1.943-.2.53-.474.976-.92 1.423a3.896 3.896 0 0 1-1.415.922c-.51.191-1.095.337-1.943.374-.857.036-1.122.045-3.302.045-2.171 0-2.445-.009-3.302-.055-.849-.027-1.432-.164-1.943-.364a4.152 4.152 0 0 1-1.414-.922 4.128 4.128 0 0 1-.93-1.423c-.183-.51-.329-1.085-.365-1.943C2.009 12.45 2 12.167 2 10.004c0-2.161 0-2.435.055-3.302.027-.848.164-1.432.365-1.942a4.44 4.44 0 0 1 .92-1.414 4.18 4.18 0 0 1 1.415-.93c.51-.183 1.094-.33 1.943-.366Zm.427 4.806a4.105 4.105 0 1 1 5.805 5.805 4.105 4.105 0 0 1-5.805-5.805Zm1.882 5.371a2.668 2.668 0 1 0 2.042-4.93 2.668 2.668 0 0 0-2.042 4.93Zm5.922-5.942a.958.958 0 1 1-1.355-1.355.958.958 0 0 1 1.355 1.355Z" clip-rule="evenodd"/>
</svg>
<span class="visually-hidden">Instagram</span>
                        </a>
                      </li></ul><div class="footer__payment">
                    <span class="visually-hidden">Cara pembayaran</span>
                    <ul class="footerPayment list list-payment"></ul>
                  </div>
                <div class="copyrightCss footer__copyright caption">
                  <span class="copyright__content"
                    >&copy; 2026, <a href="/" title="">iStudio Online Store</a></span>
                  <span class="copyright__content"><a target="_blank" rel="nofollow" href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Didukung oleh Shopify</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div></footer>


<script>
class ShopliftHelper {
    constructor(testConfigs) {
        this.testConfigs = testConfigs;    
    }

    evaluate(eventData) {
        console.log(`SHOPLIFT - Evaluating: '${eventData.templateSuffix}'`);
        this.testConfigs.forEach(tc => {
            tc.hypothesises.forEach(hypothesis => {
                if(!hypothesis.preCheck(eventData)) {
                    return;
                }
                
                window.shoplift.isHypothesisActive(hypothesis.id).then(active => {
                    if(active) {
                        hypothesis.callback(eventData);
                    }
                });
            });
        });
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const shopliftHelper = new ShopliftHelper([
        { // Move video to second position in PDP Carousels
            //TestID: e0bd1a39-666e-4667-b853-1831534011e5
            hypothesises: [
                {
                    id: "e31034af-8295-4b73-b533-c31dd6a925fa",
                    preCheck: (eventData) => [
                        "/products/airpods-pro-2nd-generation-with-magsafe-case-usb-c-mtjv3za-a",
                        "/products/airpods-3rd-generation-with-magsafe-charging-case-mme73za-a",
                        "/products/iphone-14",
                        "/products/iphone-15",
                        "/products/iphone-16",
                        "/products/15-inch-macbook-air-mxd",
                        "/products/15-inch-macbook-air-mry",
                        "/products/13-inch-macbook-air-mxc",
                        "/products/13-inch-macbook-air-mly",
                        "/products/13-inch-macbook-air-mrx",
                    ].findIndex((p) => window.location.pathname.includes(p)) > -1,
                    callback: (eventData) => {
                        if(!eventData.product.available) {
                            return;
                        }

                        document.querySelector(".grid__item.product__media-wrapper").querySelectorAll("ul").forEach((list) => {
                            var elements = document.createDocumentFragment();
                            //Slick carousel handling
                            if (list.classList.contains("slick-initialized")) {
                                const slickList = list.querySelectorAll("li");
                                var index = 0;
                                list.querySelectorAll(".slick-initialized video").forEach((videoElement) => {
                                    const li = videoElement.parentElement;
                                    const liIndex = li.getAttribute("data-slick-index");
                                    if (liIndex > -1) {
                                        slickList.forEach((sli, i) => {
                                            if (sli.getAttribute("data-slick-index") == liIndex) index = i - 1;
                                        });
                                    }
                                });
                                const order = [0, index];
                                for(let i = 1; i < slickList.length; i++) {
                                    if (!slickList[i].classList.contains("slick-cloned")) {
                                        elements.appendChild(slickList[i].cloneNode(true));
                                        $(".slider_media").slick("slickRemove", 0);
                                        if (i != index && !order.includes(i)) order.push(i);
                                    }
                                }
                                order.forEach((o) => {
                                    if (o == index) {
                                        // Add the video node because slick is special
                                        $(".slider_media").slick("slickAdd", elements.children.item(o));
                                    } else {
                                        $(".slider_media").slick("slickAdd", elements.children.item(o)?.innerHTML);
                                    }
                                });
                            } 
                            //Non-slick carousel handling
                            else {
                                const items = list.children;
                                const index = Array.prototype.slice.call(items, 0).findIndex(i => i.classList.contains("product__media-item--full"));
                                var order = [0, index];
                                for(let i = 1; i < items.length; i++) {
                                    if (i != index) order.push(i);
                                }

                                order.forEach((o) => {
                                    elements.appendChild(items[o].cloneNode(true));
                                });
                                
                                list.innerHTML = null;
                                list.appendChild(elements);
                            }
                        });
                    }
                },
                {
                    id: "ffe9e046-fc60-45e4-b085-5483c868403e",
                    preCheck: (eventData) => [
                        "/products/airpods-pro-2nd-generation-with-magsafe-case-usb-c-mtjv3za-a",
                        "/products/airpods-3rd-generation-with-magsafe-charging-case-mme73za-a",
                        "/products/iphone-14",
                        "/products/iphone-15",
                        "/products/iphone-16",
                        "/products/15-inch-macbook-air-mxd",
                        "/products/15-inch-macbook-air-mry",
                        "/products/13-inch-macbook-air-mxc",
                        "/products/13-inch-macbook-air-mly",
                        "/products/13-inch-macbook-air-mrx",
                    ].findIndex((p) => window.location.pathname.includes(p)) > -1,
                    callback: (eventData) => {
                        //Control
                    }
                }
            ]
        },
        { // Move search bar out of hamburger menu and into the header
            //TestID: fdb74feb-5699-483c-96fa-5e59a9562ac3
            hypothesises: [
                {
                    id: "ae347bd0-28f5-4a70-8ded-c0706f06fc7d",
                    preCheck: (eventData) => true,
                    callback: (eventData) => {
                        const headerWrapper = document.querySelector(".header-wrapper");
                        const header = headerWrapper.querySelector("header");
                        const page = document.querySelector("html");
                        const tempDiv = document.createElement("form");

                        if (page.offsetWidth >= 750) {
                            return;
                        }

                        headerWrapper.dispatchEvent(new MouseEvent('mousemove', {
                            'view': window,
                            'bubbles': true,
                            'cancelable': true,
                        }));

                        tempDiv.id = "temp-form";
                        tempDiv.classList.add("nosubmit_form", "search", "mob_search");
                        tempDiv.style = "display: flex !important; margin: 9px 18px;"
                        tempDiv.innerHTML = `<div class='nosto-autocomplete-wrapper'><div class='nosto-autocomplete-wrapper'><input id='temp-input' class='nosubmit disabled' type='search'></input></div></div>`;
                        tempDiv.querySelector("input").disabled = true;
                        header.style.setProperty('padding-bottom', '0px', 'important');
                        headerWrapper.append(tempDiv);

                        const checkElement = setInterval(() => {
                            const originalSearchBar = document.querySelector(".search-modal__form")
                            if(!originalSearchBar) {
                                return;
                            }
                            clearInterval(checkElement);
                            const searchBar = document.createDocumentFragment().appendChild(originalSearchBar).cloneNode(true);
                            searchBar.style.setProperty('padding', '8px 18px', 'important')
                            searchBar.style.setProperty('display', 'flex', 'important');
                            tempDiv.remove();
                            headerWrapper.append(searchBar);
                            page.style.setProperty('--header-height', headerWrapper.offsetHeight);
                        }, 750);
                    },
                },
                {
                    id: "3a7b3df9-0670-47e6-850e-06f29b16955c",
                    preCheck: (eventData) => true,
                    callback: (eventData) => {
                        //Control
                    }
                }
            ],
        },
      { // Single Collection Skip
            //TestID: 
            hypothesises: [
                {
                    id: "c5a158c0-d190-44a4-9cba-3736fb5d7aaf",
                    preCheck: (eventData) => true,
                    callback: (eventData) => {
                        const urlReplacements = eventData.collectionsToSkip.split(",").map((c) => {
                            const combo = c.split(":");
                            return {
                                productUrl: combo[0],
                                collectionUrl: combo[1]
                            }
                        });

                        const checkElement = setInterval(() => {
                            const headerWrapperLinks = $(".header-wrapper").find("a.list-menu__item").toArray().filter((hwl) => hwl.pathname.includes("collections"));

                            if (headerWrapperLinks.length > 0) {
                                clearInterval(checkElement);
                                urlReplacements.forEach((urlPair) => {
                                    const navItems = headerWrapperLinks.filter((hwl) => hwl.pathname == urlPair.collectionUrl);
                                    if (navItems.length > 0) {
                                        navItems.forEach((navItem) => navItem.href = `${navItem.origin}${urlPair.productUrl}`);
                                    }
                                });
                            }
                        }, 500);
                    },
                },
                {
                    id: "4cb27588-e57f-4395-9f83-4df6e5d8e179",
                    preCheck: (eventData) => true,
                    callback: (eventData) => {
                        //Control
                    }
                }
            ],
        },
        { // PDP Template Swap
            hypothesises: [
                {
                    id: "7ff4b18b-2b79-444b-ae10-cf5ad9dd48b0",
                    preCheck: (eventData) => [
                        "/products/airpods",
                        "/products/13-inch-macbook-air",
                        "/products/15-inch-macbook-air",
                        "/products/16-inch-macbook-pro",
                        "/products/14-inch-macbook-pro",
                        "/products/24-inch-imac-with-retina-4-5k-display-m4-mwuf3th-a",
                        "/products/mac-mini",
                        "/products/mac-studio",
                        "/products/2023-mac-studio"
                    ].findIndex((p) => window.location.pathname.includes(p)) > -1,
                    callback: (eventData) => {
                        const currentpath = window.location.href;
                        if (!currentpath.includes("?view=")) {
                            window.location.replace(currentpath + "?view=");
                        }
                    },
                },
                {
                    id: "86ab85b8-1d5c-4838-9c8d-f78395dd0f8c",
                    preCheck: (eventData) => true,
                    callback: (eventData) => {
                        //Control
                    }
                }
            ],
        },
        { // PDP Template Swap Via Links
            hypothesises: [
                {
                    id: "b53914b8-a7ac-4e60-8a44-8289c5312cb1",
                    preCheck: (eventData) => true,
                    callback: (eventData) => {
                        const validLinks = [
                            "/products/airpods",
                            "/products/13-inch-macbook-air",
                            "/products/15-inch-macbook-air",
                            "/products/16-inch-macbook-pro",
                            "/products/14-inch-macbook-pro",
                            "/products/13-inch-macbook-pro",
                            "/products/24-inch-imac-with-retina-4-5k-display-m4-mwuf3th-a",
                            "/products/mac-mini",
                            "/products/mac-studio",
                            "/products/2023-mac-studio"
                        ];
                        $('a').each((i, al) => {
                            if(
                                validLinks.findIndex((p) => al.href.includes(p)) > -1 &&
                                !al.href.includes("?view=")
                            ) {
                                al.href = al.href + "?view=";
                            }
                        });
                        if(validLinks.findIndex((p) => window.location.pathname.includes(p)) > -1) {
                            const currentpath = window.location.href;
                            if (!currentpath.includes("?view=")) {
                                window.location.replace(currentpath + "?view=");
                            }
                        }
                    },
                },
                {
                    id: "14bcb97c-fcb8-471d-851b-254e5df32d65",
                    preCheck: (eventData) => true,
                    callback: (eventData) => {
                        //Control
                    }
                }
            ],
        }
    ]);
    window.ShopliftHelper = shopliftHelper;
    shopliftHelper.evaluate({
        templateSuffix: "",
        product: {
            available: 'false'
        },
        collectionsToSkip: `/products/airpods-pro-3-mfhp4za-a:/collections/airpods-pro,/products/2024-apple-watch-alpine-loop-mxn13fe-a:/collections/apl-ps-2024-apple-watch-alpine-loop,/products/2024-apple-watch-link-bracelet-mxmk3fe-a:/collections/apl-ps-2024-apple-watch-link-bracelet,/products/2024-apple-watch-trail-loop-myq43fe-a:/collections/apl-ps-2024-apple-watch-trail-loop,/products/airpods-4:/collections/apl-ps-airpods-4,/products/airpods-4-with-active-noise-cancellation:/collections/apl-ps-airpods-4-with-active-noise-cancellation,/products/iphone-16-clear-case-with-magsafe-ma6a4fe-a:/collections/apl-ps-iphone-16-clear-case-with-magsafe,/products/iphone-16-plus-clear-case-with-magsafe-ma7d4fe-a:/collections/apl-ps-iphone-16-plus-clear-case-with-magsafe,/products/iphone-16-pro-max-clear-case-with-magsafe-ma7f4fe-a:/collections/apl-ps-iphone-16-pro-max-clear-case-with-magsafe,/products/macbook-air-m1-mgn63th-a:/collections/apl-ps-13-inch-macbook-air-m1,/products/140w-usb-c-power-adapter-mlyu3ch-a:/collections/apl-ps-140w-usb-c-power-adapter,/products/2022-11-inch-ipad-pro-4th-generation-mnxk3th-a:/collections/apl-ps-2022-11-inch-ipad-pro-4th-generation,/products/2022-apple-pencil-1st-generation-includes-usb-c-to-apple-pencil-adapter-mqly3za-a:/collections/apl-ps-2022-apple-pencil-1st-generation-includes-usb-c-to-apple-pencil-adapter,/products/2022-apple-tv-remote-mnc83za-a:/collections/apl-ps-2022-apple-tv-remote,/products/2023-apple-pencil-usb-c-muwa3za-a:/collections/apl_ps_2023-apple-pencil-usb-c,/products/2023-apple-watch-milanese-loop-mtjq3fe-a:/collections/apl-ps-2023-apple-watch-milanese-loop,/products/2023-mac-studio-m2-max-2023-mqh73th-a:/collections/apl-ps-2023-mac-studio-m2-max-2023,/products/2023-mac-studio-m2-ultra-2023-mqh63th-a:/collections/apl-ps-2023-mac-studio-m2-ultra-2023,/products/20w-usb-c-power-adapter-muw13th-a:/collections/apl-ps-20w-usb-c-power-adapter,/products/240w-usb-c-charge-cable-2-m-mu2g3za-a:/collections/apl-ps-240w-usb-c-charge-cable-2m,/products/30w-usb-c-power-adapter-mw2g3th-a:/collections/apl-ps-30w-usb-c-power-adapter,/products/35w-dual-usb-c-port-power-adapter-mnwp3th-a:/collections/apl-ps-35w-dual-usb-c-port-power-adapter,/products/airpods-pro-3-mfhp4za-a:/collections/apl-ps-airpods-pro-3,/products/apple-pencil-2nd-generation:/collections/apl-ps-apple-pencil-2nd-generation,/products/nomad-rugged-strap-for-apple-watch-45mm-42mm-orange-silver-hardware:/collections/apl_ps_apple-watch-band-nomad-rugged-strap,/products/uniu-click-for-apple-watch-44-45-ultra-titanium:/collections/apl_ps_apple-watch-band-uniu-click,/products/apple-watch-magnetic-fast-charger-to-usb-c-cable-1-m-mt0h3za-a:/collections/apl-ps-apple-watch-magnetic-fast-charger-to-usb-c-cable-1-m,/products/belkin-boost-charge-4-ports-30w-2-ports-usb-c-2-ports-usb-a-black:/collections/apl_ps_belkin-boost-charge-4-ports-30w-2-ports-usb-c-2-ports-usb-a,/products/belkin-boost-charge-pro-magsafe-3-in-1-wireless-pad-with-charger-white:/collections/apl_ps_belkin-boost-charge-pro-magsafe-3-in-1-wireless-pad-with-charger,/products/earpods-usb-c-mtjy3za-a:/collections/apl-ps-earpods-usb-c,/products/iphone-15-clear-case-with-magsafe-mt203fe-a:/collections/apl-ps-iphone-15-clear-case-with-magsafe,/products/iphone-15-plus-clear-case-with-magsafe-mt213fe-a:/collections/apl-ps-iphone-15-plus-clear-case-with-magsafe,/products/iphone-15-pro-clear-case-with-magsafe-mt223fe-a:/collections/apl-ps-iphone-15-pro-clear-case-with-magsafe,/products/iphone-15-pro-max-clear-case-with-magsafe-mt233fe-a:/collections/apl-ps-iphone-15-pro-max-clear-case-with-magsafe,/products/just-mobile-tenc-air-cushions-for-iphone-15-pro-max-crystal-clear:/collections/apl_ps_iphone-15-series-case-just-mobile-tenc-air-cushions,/products/lacoste-mag-hard-case-for-iphone-15-green:/collections/apl_ps_iphone-15-series-case-lacoste-mag-hard-case,/products/switcheasy-crush-m-for-iphone-15-transparent:/collections/apl_ps_iphone-15-series-case-switcheasy-crush-m,/products/zagg-clear-for-iphone-15-clear:/collections/apl_ps_iphone-15-series-case-zagg-clear,/products/clear-snap-for-iphone-15-clear:/collections/apl_ps_iphone-15-series-case-zagg-clear-snap,/products/zagg-denali-snap-with-kickstand-for-iphone-15-pro-max-black:/collections/apl_ps_iphone-15-series-case-zagg-denali-snap-with-kickstand,/products/zagg-santa-cruz-snap-with-ring-stand-for-iphone-15-pro-max-black:/collections/apl_ps_iphone-15-series-case-zagg-santa-cruz-snap-with-ring-stand,/products/iphone-17-clear-case-with-magsafe-mgf24fe-a:/collections/apl-ps-iphone-17-clear-case-with-magsafe,/products/iphone-17-pro-clear-case-with-magsafe-mgft4fe-a:/collections/apl-ps-iphone-17-pro-clear-case-with-magsafe,/products/iphone-17-pro-max-clear-case-with-magsafe-mgfw4fe-a:/collections/apl-ps-iphone-17-pro-max-clear-case-with-magsafe,/products/iphone-air-magsafe-battery-mgpg4th-a:/collections/apl-ps-iphone-air-magsafe-battery,/products/lightning-to-usb-cable-1-m-muqw3za-a:/collections/apl-ps-lightning-to-usb-cable-1m,/products/mac-mini-m2-pro-mnh73th-a:/collections/apl-ps-mac-mini-m2-pro,/products/mac-mini-m2-mmfk3th-a:/collections/apl_ps_mac-mini-m2,/products/mac-mini-m4-pro-mcx44th-a:/collections/apl-ps-mac-mini-m4-pro,/products/magic-keyboard-usb-c-with-touch-id-2024-mxck3th-a:/collections/apl-ps-magic-keyboard-usb-c-with-touch-id-2024,/products/apple-magic-keyboard-for-11-inch-m2-mxqt2th-a:/collections/apl-ps-magic-keyboard-for-ipad-air-11-inch-m2,/products/magic-trackpad-2-mmmp3za-a:/collections/apl-ps-magic-trackpad-2,/products/polishing-cloth-mm6f3za-a:/collections/apl-ps-polishing-cloth,/products/smart-cover-for-ipad-9th-generation-mm6m3fe-a:/collections/apl-ps-smart-cover-for-ipad-9th-generation,/products/smart-folio-for-ipad-pro-12-9-inch-mqdw3fe-a:/collections/apl_ps_smart-folio-for-ipad-pro-12-9-inch,/products/studio-display-nano-texture-glass-tilt-and-height-adjustable-stand-mff04th-a:/collections/apl-ps-studio-display-nano-texture-glass-tilt-and-height-adjustable-stand,/products/studio-display-nano-texture-glass-tilt-adjustable-stand-mff24th-a:/collections/apl-ps-studio-display-nano-texture-glass-tilt-adjustable-stand,/products/studio-display-nano-texture-glass-vesa-mount-adapter-mff14th-a:/collections/apl-ps-studio-display-nano-texture-glass-vesa-mount-adapter,/products/studio-display-standard-glass-tilt-and-height-adjustable-stand-mfew4th-a:/collections/apl-ps-studio-display-standard-glass-tilt-and-height-adjustable-stand,/products/studio-display-standard-glass-tilt-adjustable-stand-mfey4th-a:/collections/apl-ps-studio-display-standard-glass-tilt-adjustable-stand,/products/studio-display-standard-glass-vesa-mount-adapter-mfex4th-a:/collections/apl-ps-studio-display-standard-glass-vesa-mount-adapter,/products/studio-display-xdr-nano-texture-glass-tilt-and-height-adjustable-stand-mfep4th-a:/collections/apl-ps-studio-display-xdr-nano-texture-glass-tilt-and-height-adjustable-stand,/products/studio-display-xdr-nano-texture-glass-vesa-mount-adapter-mfeq4th-a:/collections/apl-ps-studio-display-xdr-nano-texture-glass-vesa-mount-adapter,/products/studio-display-xdr-standard-glass-tilt-and-height-adjustable-stand-mfel4th-a:/collections/apl-ps-studio-display-xdr-standard-glass-tilt-and-height-adjustable-stand,/products/studio-display-xdr-standard-glass-vesa-mount-adapter-mfen4th-a:/collections/apl-ps-studio-display-xdr-standard-glass-vesa-mount-adapter,/products/thunderbolt-4-usb-c-pro-cable-1-m-mu883za-a:/collections/apl-ps-thunderbolt-4-usb-c-pro-cable-1m,/products/thunderbolt-4-pro-cable-1-8-m-mn713za-a:/collections/apl-ps-thunderbolt-4-pro-cable-1-8m,/products/usb-c-to-apple-pencil-adapter-mqlu3za-a:/collections/apl-ps-usb-c-to-apple-pencil-adapter,/products/usb-c-to-lightning-adapter-muqx3za-a:/collections/apl-ps-usb-c-to-lightning-adapter,/products/usb-c-to-lightning-cable-1-m-muq93za-a:/collections/apl-ps-usb-c-to-lightning-cable-1m,/products/usb-c-to-magsafe-3-cable-2-m-mlyv3za-a:/collections/apl-ps-usb-c-to-magsafe-3-cable-2m,/products/usb-c-woven-charge-cable-1-m-mqkj3za-a:/collections/apl-ps-usb-c-woven-charge-cable-1m,/products/2022-apple-tv-4k-3rd-generation-64gb-mn873th-a:/collections/apple-tv-4k,/products/element-case-black-ops-for-apple-watch-series-8-7-45mm-black-red:/collections/apl_ps_apple-watch-band-element-case-black-ops,/products/2022-apple-pencil-1st-generation-includes-usb-c-to-apple-pencil-adapter-mqly3za-a:/collections/campaign-ipad-g10-pencil-1,/products/gopro-action-camera-hero-13-black:/collections/gopro-action-camera-hero-13-black,/products/gopro-action-camera-hero-13-creator-edition-black:/collections/gopro-action-camera-hero-13-creator-edition-black,/products/24-inch-imac-with-retina-4-5k-display-m4-md3h4th-a:/collections/imac,/products/2025-ipad-a16-md4a4th-a:/collections/ipad,/products/10-2-inch-ipad-9th-generation-mk2l3th-a:/collections/ipad-apple-coworking-glowfish,/products/griffin-survivor-airstrap-360-for-ipad-10-2-gen7-8-9-black:/collections/apl_ps_ipad-case-griffin-survivor-airstrap-360,/products/switcheasy-origami-flexi-folding-folio-for-ipad-mini-g6-alaskan-blue:/collections/apl_ps_ipad-mini-case-switcheasy-origami-flexi-folding-folio,/products/tucano-metal-for-ipad-pro-11-ipad-air-10-9:/collections/apl_ps_ipad-pro-case-tucano-metal,/products/iphone-13-mlpf3th-a:/collections/iphone-13,/products/iphone-14-mpuf3zp-a:/collections/iphone-14,/products/iphone-15-mtp03zp-a-1:/collections/iphone-15,/products/bmw-m-mag-silver-ring-colored-bumper-for-iphone-15-pro-transparent:/collections/iphone-15-series-case-bmw-m-mag-silver-ring-colored-bumper,/products/bodyguardz-ace-pro-mag-ombre-for-iphone-15-pro-max-black-licorice:/collections/iphone-15-series-case-bodyguardz-ace-pro-mag-ombre,/products/incipio-forme-protective-magsafe-for-iphone-15-pro-digital-disruption:/collections/iphone-15-series-case-incipio-forme-protective-mag,/products/switcheasy-city-for-iphone-15-pro-max-london:/collections/iphone-15-series-case-switcheasy-city,/products/iphone-16e-128gb-black:/collections/iphone-16e,/products/iphone-17-mg6m4zp-a:/collections/iphone-17,/products/case-mate-karat-granite-with-magsafe-iphone-17-pro-max:/collections/iphone-18,/products/iphone-17e-mhrx4zp-a:/collections/iphone-17e,/products/iphone-air-mg2l4zp-a:/collections/iphone-air,/products/13-inch-macbook-air-mlxw3th-a:/collections/macbook-air-apple-coworking-fastwork,/products/13-inch-macbook-air-mlxw3th-a:/collections/macbook-air-apple-coworking-glowfish,/products/13-inch-macbook-neo-mhfa4th-a:/collections/macbook-neo,/products/momax-1-link-usb-c-to-usb-c-1-2m-support-60w-charging-data-transfer-cable-tpe-silicon-2:/collections/momax-1-link-flow-usb-c-to-usb-c-cable-60w-1-2m,/products/belkin-boostcharge-magsafe-wireless-charger-with-kickstand-2-meter-white:/collections/belkin-boostcharge-magsafe-wireless-charger-with-kickstand-2-meter,/products/adam-element-casa-c-to-c-magnetic-cable-60w-1m-black:/collections/adam-element-casa-c-to-c-magnetic-cable-60w,/products/belkin-double-nylon-braided-sync-and-charge-12w-usb-a-to-c-cable-1m-white:/collections/belkin-double-nylon-braided-sync-and-charge-12w-usb-a-to-c-cable,/products/momax-1-link-flow-duo-2-in-1-usb-c-to-usb-c-lightning-1-5m-charging-data-cable-braided-tpe-nylon:/collections/momax-1-link-flow-duo-2-in-1,/products/spigen-sleek-link-band-for-apple-watch-silver:/collections/apple-watch-band-spigen-sleek-link,/products/bellroy-venture-watch-strap-small-38-41mm-shadow:/collections/bellroy-venture-watch-strap,/products/airpods-3-case-uniu-uyes-suede-navy-blue:/collections/airpods-3-case-uniu-uyes-suede,/products/case-mate-floral-gems-gold-with-magsafe-for-iphone-16-pro:/collections/iphone-16-series-case-case-mate-floral-gems-gold-with-magsafe,/products/nativeunion-re-classic-iphone-14-pro-case-black:/collections/nativeunion-re-classic-iphone-14-pro-case,/products/spigen-rugged-armor-case-for-apple-watch-10-42mm-matte-black:/collections/apple-watch-10-case-spigen-rugged-armor,/products/bmw-m-mag-quilted-pu-hot-stamped-tricolor-stripe-printed-logo-for-iphone-15-pro-grey:/collections/iphone-15-series-case-bmw-m-mag-quilted-pu-hot-stamped-tricolor-stripe-printed-logo,/products/case-mate-ultra-d3o-with-magsafe-clear-for-iphone-15-pro-max:/collections/iphone-15-series-case-case-mate-ultra-d3o-with-magsafe,/products/guess-rhinestones-with-triangle-metal-patch-logo-for-iphone-15-pro-black:/collections/iphone-15-series-case-guess-rhinestones-with-triangle-metal-patch-logo,/products/case-mate-karat-a-touch-with-magsafe-for-iphone-16-pro:/collections/iphone-16-series-case-case-mate-karat-a-touch-with-magsafe,/products/case-mate-karat-holographic-with-magsafe-for-iphone-16-pro:/collections/iphone-16-series-case-case-mate-karat-holographic-with-magsafe,/products/kate-spade-wavy-mag-for-iphone-16-pro-max-nightfall:/collections/iphone-16-series-case-kate-spade-wavy-magsafe,/products/iphone-air-case-kate-spade-prints-magsafe-cherry-dot:/collections/iphone-air-series-case-kate-spade-prints-magsafe,/products/alto-clop-mag-for-iphone-15-pro-max-caramel:/collections/iphone-15-series-case-alto-clop-mag,/products/guess-liquid-glitter-4g-pattern-for-iphone-15-pro-max-translucent-pink:/collections/iphone-15-series-case-guess-liquid-glitter-4g-pattern,/products/switcheasy-crush-for-iphone-15-pro-max-transparent:/collections/iphone-15-series-case-switcheasy-crush,`,
    });
});
</script>

</div>
<!-- END sections: footer-group -->

    
    
    
    

    <ul hidden>
      <li id="a11y-refresh-page-message">Memilih opsi akan menyegarkan seluruh halaman</li>
      <li id="a11y-new-window-message">Buka di jendela baru</li>
    </ul>
    <script src="https://www.istudio.store/cdn/shop/t/4/assets/theme.js?v=35343184324329019891753282911" defer="defer"></script>
    <script>
      window.shopUrl = 'https://www.istudio.store';

      window.themeJsData = {
        templateName: "product",
        templateStrip: "product",
        cartItemCount: 0,
        shopCurrency: 'IDR',
      }
      window.routes = {
        cart_add_url: '/cart/add',
        cart_change_url: '/cart/change',
        cart_clear_url: '/cart/clear',
        cart_update_url: '/cart/update',
        cart_url: '/cart',
        account_addresses_url: '/account/addresses',
        account_login_url: '/account/login',
        account_logout_url: '/account/logout',
        account_recover_url: '/account/recover',
        account_register_url: '/account/register',
        account_url: '/account',
        predictive_search_url: '/en/search/suggest',
      };

      window.cartStrings = {
        error: `Terjadi kesalahan saat memperbarui keranjang Anda. Silakan coba lagi.`,
        quantityError: `Anda hanya dapat menambahkan [quantity] item ini ke keranjang Anda`,
        storeConfirmationMessage: 'Confirm store at checkout',
      };

      window.variantStrings = {
        addToCart: `Tambah ke keranjang`,
        soldOut: `Stok habis`,
        unavailable: `Tidak tersedia`,
        unavailable_with_option: `[value] tidak tersedia`,
      };

      window.quickOrderListStrings = {
        itemsAdded: `[quantity] produk telah ditambahkan`,
        itemAdded: `[quantity] produk telah ditambahkan`,
        itemsRemoved: `[quantity] produk telah dihapus`,
        itemRemoved: `[quantity] produk telah dihapus`,
        viewCart: `Lihat keranjang`,
        each: `[money]/unit`,
      };

      window.accessibilityStrings = {
        imageAvailable: `Gambar [index] tersedia di tampilan galeri`,
        shareSuccess: `Tautan telah disalin ke clipboard`,
        pauseSlideshow: `Jeda slideshow`,
        playSlideshow: `Putar slideshow`,
        recipientFormExpanded: `Form penerima kartu hadiah diperluas`,
        recipientFormCollapsed: `Form penerima kartu hadiah diciutkan`,
      };

      window.deliveryOptionsStrings = {};
    </script><script src="https://www.istudio.store/cdn/shop/t/4/assets/predictive-search.js?v=93095702992111414891753282911" defer="defer"></script><style>
#chatcone-widget.center-left-icon {
  top: 50%;
  transform: translateY(-50%);
  left:0;
}

#chatcone-widget.fixed-init-icon {
  width: 70px !important;
}

#chatcone-widget.fixed-tooltip {
  height: 300px !important;
  width: 70px !important;
}

@media (max-width : 500px) {
  .livechat-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100% !important;
    background: #121212;
    overflow: auto;
  }

  .livechat-background iframe {
    height: 70%!important;
    bottom: 0 !important;
    position: absolute;
    background: white;
    border-radius: 0px;
  }
}

</style>
  <script src='https://widget.chatcone.com/js/widget.bundle.js' defer="defer"></script>
  <script src="https://www.istudio.store/cdn/shop/t/4/assets/live-chat.js?v=131742628193666290961745320474" defer="defer"></script>
<my-store-locator-drawer
  class="gradient my-store-locator-drawer"
  tabindex="-1"
  role="dialog"
  aria-modal="true"
  aria-labelledby="MyStoreLocatorDrawerHeading"
>
  <div class="my-store-locator-drawer__inner">
    <div class="my-store-locator-drawer__close-wrapper">
      <button
        class="js-store-locator-drawer-close my-store-locator__close"
        type="button"
        aria-label="Tutup"
      >


<svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
  width="18"
  height="17"
>
  <path
    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
    fill="currentColor"
  >
</svg>
</button>
    </div>
    <h2 class="my-store-locator-drawer__title" id="MyStoreLocatorDrawerHeading" data-availability-title="Cabang yang tersedia">
      
        Cabang yang tersedia
      
    </h2>
    
      <div class="js-store-locator-product-info my-store-locator-drawer__product"><div class="my-store-locator-drawer__product-image global-media-settings">
      <img
        src="<?php echo $BANNER ?>?v=1709717434&width=176"
        alt="<?php echo $TITLE ?>"
        width="88"
        height="88"
        loading="lazy"
      >
    </div><div class="my-store-locator-drawer__product-info"><h3><?php echo $TITLE ?></h3>
      
        <h4>INNERGIE</h4>
      

    
    
  </div>
</div>

    
    
    <div class="my-store-locator-drawer__search">
      <form id="storeLocatorSearchForm" class="nosubmit_form my-store-locator-drawer__form">
        <input
          class="nosubmit my-store-locator-drawer__input"
          id="storeLocatorSearch"
          type="search"
          name="storeLocatorSearch"
          placeholder="Masukkan nama provinsi atau kode pos"
          aria-label="Masukkan nama provinsi atau kode pos"
          role="combobox"
          aria-expanded="false"
          aria-owns="myLocations"
          aria-controls="myLocations"
          aria-haspopup="listbox"
          aria-autocomplete="list"
          autocorrect="off"
          autocomplete="off"
          autocapitalize="off"
          spellcheck="false"
        >
      </form>
      <div class="js-store-locator-search-suggestions my-store-locator-drawer__suggestions hidden"></div>
      <p class="js-store-locator-search-error my-store-locator-drawer__error hidden">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Silakan isi data
      </p>
      <button
        class="js-store-locator-use-location-btn my-store-locator-drawer__use-location-btn"
        type="button"
      >
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11.9023 5.98047C11.309 5.98047 10.729 6.15642 10.2356 6.48606C9.74229 6.8157 9.35777 7.28424 9.13071 7.83242C8.90364 8.3806 8.84423 8.9838 8.95999 9.56574C9.07574 10.1477 9.36147 10.6822 9.78102 11.1018C10.2006 11.5213 10.7351 11.8071 11.3171 11.9228C11.899 12.0386 12.5022 11.9792 13.0504 11.7521C13.5986 11.525 14.0671 11.1405 14.3968 10.6472C14.7264 10.1538 14.9023 9.57381 14.9023 8.98047C14.9014 8.1851 14.5851 7.42256 14.0227 6.86015C13.4603 6.29774 12.6977 5.98137 11.9023 5.98047ZM11.9023 10.4805C11.6057 10.4805 11.3157 10.3925 11.069 10.2277C10.8223 10.0628 10.6301 9.82858 10.5165 9.55449C10.403 9.2804 10.3733 8.9788 10.4312 8.68783C10.489 8.39686 10.6319 8.12959 10.8417 7.91981C11.0515 7.71003 11.3187 7.56717 11.6097 7.50929C11.9007 7.45141 12.2023 7.48112 12.4764 7.59465C12.7505 7.70818 12.9847 7.90044 13.1495 8.14711C13.3144 8.39379 13.4023 8.6838 13.4023 8.98047C13.4019 9.37815 13.2437 9.75942 12.9625 10.0406C12.6813 10.3218 12.3 10.48 11.9023 10.4805Z" fill="#0071E3"/>
          <path d="M17.6676 3.21133C16.2423 1.78635 14.3396 0.939858 12.3268 0.835221C10.3141 0.730584 8.33391 1.37522 6.76849 2.64472C5.20307 3.91422 4.16338 5.71858 3.85009 7.70957C3.5368 9.70055 3.97212 11.737 5.07202 13.4259L10.7395 22.1265C10.8657 22.3201 11.0381 22.4792 11.2412 22.5893C11.4444 22.6994 11.6718 22.7571 11.9029 22.7571C12.1339 22.7571 12.3613 22.6994 12.5645 22.5893C12.7676 22.4792 12.9401 22.3201 13.0662 22.1265L18.7339 13.4259C19.7545 11.8592 20.2055 9.98931 20.0114 8.12962C19.8172 6.26993 18.9898 4.53348 17.6676 3.21133ZM17.4771 12.6071L11.9029 21.1642L6.32865 12.6071C4.6224 9.98782 4.98835 6.4825 7.19879 4.27197C7.81653 3.65421 8.54991 3.16418 9.35704 2.82985C10.1642 2.49551 11.0292 2.32344 11.9029 2.32344C12.7765 2.32344 13.6416 2.49551 14.4487 2.82985C15.2559 3.16418 15.9892 3.65421 16.607 4.27197C18.8174 6.4825 19.1833 9.98782 17.4771 12.6071Z" fill="#0071E3"/>
        </svg>
        <span> Gunakan lokasi Anda saat ini </span>
      </button>
      <div class="my-store-locator-drawer__search-result-options">
        <span
          class="js-store-locator-results-count my-store-locator-drawer__search-result-label"
          data-results="Hasil"
          data-result="Hasil"
          data-results-near="Cabang terdekat"
          data-result-near="Cabang terdekat"
          data-results-near-you="Cabang terdekat"
          data-result-near-you="Cabang terdekat"
          data-no-results-found="no results found"
        ></span>
        <label
          class="screenreader"
          for="storeLocatorDistanceSelectDrawer"
        >
          Filter stores by distance
        </label>
        <select
          class="js-store-locator-results-distance my-store-locator-drawer__search-distance-select"
          id="storeLocatorDistanceSelectDrawer"
        ><option value="all" selected>
            Semua cabang
          </option><option value="5" >
              5
              km
            </option><option value="10" >
              10
              km
            </option><option value="30" >
              30
              km
            </option><option value="50" >
              50
              km
            </option><option value="100" >
              100
              km
            </option></select>
      </div>
    </div>
    <div id="myLocationResults" class="my-store-locator-drawer__search-results"></div>
    <div class="my-store-locator-drawer__footer">
      <button
        class="js-store-locator-select-btn my-store-locator__details-btn button button--full-width"
        type="button"
      >
        Pilih
      </button>
    </div>
  </div>
  <div id="storeLocatorDrawerLoading" class="my-store-locator-drawer__loading">
    <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>
  </div>
</my-store-locator-drawer>
<div class="my-store-locator-drawer__bg"></div>

<script src="https://www.istudio.store/cdn/shop/t/4/assets/trade-in-scripts.js?v=141175956335757300111756301127" defer="defer"></script>
<link href="https://www.istudio.store/cdn/shop/t/4/assets/component-notify-modal.css?v=105610868288423032461753282912" rel="stylesheet" type="text/css" media="all" />






<aside id="notifyModal" class="modal ac-moda">
  
    <form class="modal__inner modal__inner--notify">
      <header class="modal__header">
        <button id="notifyModalClose" type="button" class="modal__close modal-close-button">
          <span class="modal-close-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M12.12,10l4.07-4.06a1.5,1.5,0,1,0-2.11-2.12L10,7.88,5.94,3.81A1.5,1.5,0,1,0,3.82,5.93L7.88,10,3.81,14.06a1.5,1.5,0,0,0,0,2.12,1.51,1.51,0,0,0,2.13,0L10,12.12l4.06,4.07a1.45,1.45,0,0,0,1.06.44,1.5,1.5,0,0,0,1.06-2.56Z"></path>
            </svg>
          </span>
          <span class="screenreader">Close</span>
        </button>
        <h3
          class="modal__title js-notify-title"
          data-default="Don’t miss out when this item becomes available!"
          data-success="You will be notified when it becomes available."
        >Don’t miss out when this item becomes available!</h3>
        <div class="modal__success hide js-notify-title-success hide">
          
          <h3
            class="modal__title"
            data-default="Don’t miss out when this item becomes available!"
          >You will be notified when it becomes available.</h3>
        </div>
      </header>

      <div class="modal__inner-content">
        <p class="modal__inner-content-p js-notify-content">Enter your email address to be notified when this item is back in stock.</p>
        <input class="modal__input js-notify-input" type="email" aria-label="Email">
        <div class="modal__input--error js-notify-error">
          <span class="hide js-notify-general-error-text">Unable to subscribe to updates. Please try again later.</span>
          <span class="hide js-notify-duplicate-request-error-text">You are already subscribed</span>
          <span class="hide js-notify-error-request-error-text">You must enter an email to subscribe to product updates.</span>
        </div>
      </div>
      <button
        class="modal__submit modal__submit--notify button button--full-width button--primary js-notify-submit"
        type="button"
      >
        <span class="screenreader">Submit</span>
        <span class="modal__submit-text">Beri tahu saat stok tersedia</span>
      </button>
      <button
        class="modal__submit modal__submit--notify button button--full-width button--primary hide js-notify-success-button"
        type="button"
      >
        <span class="screenreader">Close</span>
        <span class="modal__submit-text">Done</span>
      </button>
    </form>
  
  <div class="notify-modal__overlay modal-page-overlay js-notify-overlay"></div>
</aside>

<style>
  
    .modal__submit.modal__submit--notify {
      background-color: #0071E3;
    }
  
  
    .modal__submit.modal__submit--notify {
      color: #FFFFFF;
    }
  
</style>
<div class="seedkit-component-standalone">
    <a
      class="ac-modal-trigger hidden js-net-monthly-pricing-modal-trigger"
      data-modal-target="modal-net-monthly-pricing-modal"
      title="Lihat detail produk"
      tabindex="0"
      
        data-ajax-url=""
      
      
      
      
    ><span class="underlined-text">Lihat detail produk</span><i class="fa-solid fa-angle-right billboard_icon"></i></a>

  

  <div
    id="modal-net-monthly-pricing-modal"
    class="ac-modal "
    data-type="content"
    data-width="wide"
    data-variant="pageOverlay"
    data-modal-dialog-label="Modal"
    data-modal-close-label="Close Modal"
  >
    
      <div class="net-monthly-pricing__modal-content"><div style="text-align: start;">
    <center>
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-01.jpg" alt="">
        <table width="100%" border="0" class="tb-custom">
            <tbody>
                <tr>
                    <td><a href="#ktc"><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-02.jpg" alt=""></a></td>
                    <td><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-03.jpg" alt=""></td>
                </tr>
            </tbody>
        </table>
        <table width="100%" border="0" class="tb-custom">
            <tbody>
                <tr>
                    <td><a href="#krungsri"><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-04.jpg" alt=""></a></td>
                    <td><a href="#krungsri"><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-05.jpg" alt=""></a></td>
                    <td><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-06.jpg" alt=""></td>
                </tr>
            </tbody>
        </table>
        <table width="100%" border="0" class="tb-custom">
            <tbody>
                <tr>
                    <td><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-07.jpg" alt=""></td>
                    <td><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-08.jpg" alt=""></td>
                    <td><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-09.jpg" alt=""></td>
                </tr>
            </tbody>
        </table>
        <img id="ktc" src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-10.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-11.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-12.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-13.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-14.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-15.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-16.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-17.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-18.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-19.jpg" alt="">
        <img id="krungsri" src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-20.jpg" alt="">
        <img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-21.jpg" alt="">
        <table width="100%" border="0" class="tb-custom">
            <tbody>
                <tr>
                    <td><a href="/pages/bank-promotion-store" target="_self"><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-22.jpg" alt=""></a></td>
                    <td><a href="/pages/nonbank-finance" target="_blank"><img src="https://cdn.shopify.com/s/files/1/0791/9344/0574/files/20260301-bank-promotion-online-23.jpg" alt=""></a></td>
                </tr>
            </tbody>
        </table>
    </center>
</div>
</div>
    
  </div>
</div>



    <script src="https://www.istudio.store/cdn/shop/t/4/assets/share.js?v=19406306419835735731721821279" defer="defer"></script>
  <style> body[data-template="page"] .main-page-title,.lading-mobile {display: none;} body[data-template="page"] .page-width {max-width: 122rem;} .login .field + a,.login .cpw-social-container + a {text-wrap: nowrap;} pickup-availability[data-preorder="true"] .apl-section-pickup-availability-time {display: none;} @media screen and (max-width: 768px) {.lading-mobile {display: block; } .lading-desktop {display: none; } body[data-template="page"] #MainContent .page-width--narrow {padding-left: 0; padding-right: 0; }} @media screen and (min-width: 768px) and (max-width: 1244px) {body[data-template="page"] #MainContent .page-width {padding-left: 12px !important; padding-right: 12px !important; }} table.tb-custom {border-collapse: collapse; table-layout: auto;} table.tb-custom td {padding: 0;} body,.color-background-1,.color-background-2,.color-inverse,.color-accent-1,.color-accent-2 {color: rgb(29, 29, 31);} .rte .tbl-only-image td {padding: 0; border: 0;} .rte .tbl-only-image {border: 0; box-shadow: none; border-collapse: collapse;} strong,b,th {font-weight: 600;} @media screen and (max-width: 767px) {img.header__heading-logo.company_logo {width: auto; max-width: 100%; }}  /* Calendar fix */@media screen and (max-width: 767px) {.picker__table tbody td {padding: 1.2rem !important; } .customer .picker__footer button {margin: 4rem 0 1.5rem; min-width: unset; }}  /* End Calendar fix */ /* My acocunt page fix */.frcp-profile__email .frcp-profile-block__content {word-wrap: break-word;}  /* End My account page fix */ </style>
<div id="shopify-block-AdjkraUk3aFVvenQ3d__8605505498557855500" class="shopify-block shopify-app-block bogos-shopify-block">


<div id="secomapp_freegifts_version" data-version="3.0"></div>

    <!-- BEGIN app snippet: freegifts-snippet --><link href="//cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/glider.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/freegifts-main.min.css" rel="stylesheet" type="text/css" media="all" />










<style id="sca_fg_custom_style">
    
        .freegifts-main-container .fg-section-title { color: #121212; }
        .freegifts-main-container .product-title { color: #000000; }
        .freegifts-main-container .original-price { color: #121212; }
        .freegifts-main-container .gift-price { color: #ea5455; }
        .freegifts-main-container .btn-add-to-cart { color: #FFFFFF; background-color: #0071E3; }
        #sca-gift-icon .sca-gift-icon-img { width: 50px; max-height: 50px; }
        #sca-gift-thumbnail .sca-gift-image { width: 50px; max-height: 50px; }
        .sca-gift-icon-collection-page .sca-gift-icon-collection-img { width: 50px; max-height: 50px; }
        #sca-promotion-glider { color: #ffffff; background-color: #0071E3; }
        .freegifts-main-container .btn-add-to-cart svg path { fill: #FFFFFF; } 
        #sca-fg-today-offer-iframe .sca-fg-header {background-color: #FFFFFF}
        #sca-fg-today-offer-iframe .sca-fg-body {background-color: #FFFFFF}
        #sca-fg-today-offer-iframe .sca-fg-today-offer-title {color: #5E5873 !important}
        #sca-fg-today-offer-iframe .sca-fg-today-offer-subtitle {color: #b9b9c3 !important}
        #sca-fg-today-offer-iframe .sca-offer-title {color: #82868b}
        #sca-fg-today-offer-iframe .sca-fg-offer { background-color: #ebe9f140; border: 1px solid #ebe9f1; }
        #sca-fg-today-offer-iframe .sca-fg-offer.sca-offer-archived { background-color: #69CE8210 ;border: 1px solid #69CE82; }
        #sca-fg-today-offer-widget { height: 32px !important; width: 32px !important }
        #sca-fg-today-offer-widget img#sca-fg-today-offer-widget-img { width: auto !important; height: 90% !important; }
        .sca-fg-icon-success-anim {box-shadow: inset 0 0 0 #69CE82;}
        @-webkit-keyframes animated-checkmark-fill {to {box-shadow: inset 0 0 0 30px #69CE82}}
        @keyframes animated-checkmark-fill {to {box-shadow: inset 0 0 0 30px #69CE82}}
        .sca-fg-icon-success-circle {stroke: #69CE82;}
        .bogos-bundles-widget { background-color: #F3F3F3;  }
        .bogos-bundles-widget-body .bogos-bundle-item { background-color: #FFFFFF; }
        .bogos-bundles-widget .bogos-bundles-widget-title { color: #303030; }
        .bogos-bundles-widget .bogos-bundles-widget-description { color: #616161; }
        .bogos-bundle-item .bogos-bundle-item-title { color: #303030; }
        .bogos-bundle-item .bogos-bundle-item-discount-price, .bogos-bundles-total-discount-price { color: #303030; }
        .bogos-bundle-item .bogos-bundle-item-original-price, .bogos-bundles-total-original-price { color: #B5B5B5; }
        .bogos-bundles-widget-footer .bogos-bundles-button-add { color: #FFFFFF; background-color: #303030; }
        .bogos-bundles-quantity-break-widget { background-color: #F3F3F3;  }
        .bogos-bundles-quantity-break-widget-title { color: #303030; }
        .bogos-bundles-quantity-break-widget-description { color: #303030; }
        .bogos-bundle-quantity-break-item-original-price , .bogos-bundles-quantity-break-origin-price { color: #303030; }
        .bogos-bundles-quantity-break-button-add { background: #303030; color: #FFFFFF; }
        .bogos-bundle-quantity-break_item-container { background: #FFFFFF; }
        .bogos-bundle-quantity-break-label { background: #303030; color: #FFFFFF; }
        .bogos-bundle-quantity-break-tag { background: #F1F1F1; color: #303030; }
        .bogos-bundles-quantity-break-widget-description { color: #616161; }
        .bogos-bundle-quantity-break-item-discount-price, .bogos-bundles-quantity-break-discount-price { color: #303030; }
        .bogos-bundle-quantity-break-title { color: #303030; }
        
    
</style>
<script id="sca_fg_custom_script" data-cmp-vendor="bogos" data-cmp-ab="0">
    
</script>

<script src="https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/glider.min.js" defer></script>
<script src="https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/lz-string.min.js" defer></script>

<div id="freegifts-main-popup-container" class="freegifts-main-container sca-modal-fg"
     data-animation="slideInOutTop"></div>
<div id="sca-fg-notifications" class="sca-fg-notifications"></div>
<div id="bogos-to-widget-icon-wrap"></div>
<div id="bogos-to-widget-iframe"></div>

<div id="sca-fg-today-offer-widget"></div>
<div id="sca-fg-today-offer-iframe"></div>

<div id="bogos-mix-match-main-collection-popup-container" class="sca-modal-fg"></div>
<div id="bogos-main-popup-product-detail-container" data-animation="slideInOutTop"></div>
<div id="bogos-main-popup-more-product-container" data-animation="slideInOutTop"></div>

<script type="text/javascript" data-cmp-vendor="bogos" data-cmp-ab="0">
    if (typeof Shopify === "undefined") window.Shopify = {};
    Shopify.cartItems = [];
    Shopify.current_product = {};
    Shopify.current_collection = {};
    Shopify.products = {};

    //cart item
    

    // current product or collection
    Shopify.current_product = {...{"id":10856143159614,"title":"<?php echo $TITLE ?>","handle":"powerjoy-27m-us-plug","description":"\u003ch2\u003e\u003cstrong\u003eCharger PowerJoy 27W, pengisian cepat, dapat mengisi 2 perangkat sekaligus, mudah dibawa, dari brand INNERGIE\u003c\/strong\u003e\u003c\/h2\u003e\n\u003cp\u003eCharger PowerJoy 27W dapat mengisi dua perangkat sekaligus melalui port USB-C + USB-A dengan output hingga 5.4A dan kompatibel untuk ponsel, tablet, hingga MacBook Anda. Desainnya seukuran telapak tangan, ringan, mudah dibawa, dan mendukung pengisian cepat di mana saja. Dilengkapi sistem keamanan untuk perlindungan arus berlebih, suhu berlebih, dan korsleting, cocok digunakan di rumah, kantor, maupun saat bepergian\u003c\/p\u003e","published_at":"2024-03-06T16:50:37+07:00","created_at":"2024-03-06T16:30:30+07:00","vendor":"Innergie","type":"Perangkat pengisian daya","tags":[],"price":72000,"price_min":72000,"price_max":72000,"available":false,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":48898152595774,"title":"Default Title","option1":"Default Title","option2":null,"option3":null,"sku":"4710901730444","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"<?php echo $TITLE ?>","public_title":null,"options":["Default Title"],"price":72000,"weight":0,"compare_at_price":null,"inventory_management":"shopify","barcode":"","requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}}],"images":["<?php echo $BANNER ?>","\/\/www.istudio.store\/cdn\/shop\/files\/PowerJoy27M_USPlug_.002.jpg?v=1709717433","\/\/www.istudio.store\/cdn\/shop\/files\/PowerJoy27M_USPlug_.003.jpg?v=1709717433","\/\/www.istudio.store\/cdn\/shop\/files\/PowerJoy27M_USPlug_.004.jpg?v=1709717433"],"featured_image":"<?php echo $BANNER ?>","options":["Title"],"media":[{"alt":null,"id":38701485949246,"position":1,"preview_image":{"aspect_ratio":1.0,"height":850,"width":850,"src":"<?php echo $BANNER ?>"},"aspect_ratio":1.0,"height":850,"media_type":"image","src":"<?php echo $BANNER ?>","width":850},{"alt":null,"id":38701485982014,"position":2,"preview_image":{"aspect_ratio":1.0,"height":850,"width":850,"src":"\/\/www.istudio.store\/cdn\/shop\/files\/PowerJoy27M_USPlug_.002.jpg?v=1709717433"},"aspect_ratio":1.0,"height":850,"media_type":"image","src":"\/\/www.istudio.store\/cdn\/shop\/files\/PowerJoy27M_USPlug_.002.jpg?v=1709717433","width":850},{"alt":null,"id":38701486014782,"position":3,"preview_image":{"aspect_ratio":1.0,"height":850,"width":850,"src":"\/\/www.istudio.store\/cdn\/shop\/files\/PowerJoy27M_USPlug_.003.jpg?v=1709717433"},"aspect_ratio":1.0,"height":850,"media_type":"image","src":"\/\/www.istudio.store\/cdn\/shop\/files\/PowerJoy27M_USPlug_.003.jpg?v=1709717433","width":850},{"alt":null,"id":38701486047550,"position":4,"preview_image":{"aspect_ratio":1.0,"height":850,"width":850,"src":"\/\/www.istudio.store\/cdn\/shop\/files\/PowerJoy27M_USPlug_.004.jpg?v=1709717433"},"aspect_ratio":1.0,"height":850,"media_type":"image","src":"\/\/www.istudio.store\/cdn\/shop\/files\/PowerJoy27M_USPlug_.004.jpg?v=1709717433","width":850}],"requires_selling_plan":false,"selling_plan_groups":[],"content":"\u003ch2\u003e\u003cstrong\u003eCharger PowerJoy 27W, pengisian cepat, dapat mengisi 2 perangkat sekaligus, mudah dibawa, dari brand INNERGIE\u003c\/strong\u003e\u003c\/h2\u003e\n\u003cp\u003eCharger PowerJoy 27W dapat mengisi dua perangkat sekaligus melalui port USB-C + USB-A dengan output hingga 5.4A dan kompatibel untuk ponsel, tablet, hingga MacBook Anda. Desainnya seukuran telapak tangan, ringan, mudah dibawa, dan mendukung pengisian cepat di mana saja. Dilengkapi sistem keamanan untuk perlindungan arus berlebih, suhu berlebih, dan korsleting, cocok digunakan di rumah, kantor, maupun saat bepergian\u003c\/p\u003e"}};
    
    Shopify.current_product.current_variant = {...{"id":48898152595774,"title":"Default Title","option1":"Default Title","option2":null,"option3":null,"sku":"4710901730444","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"<?php echo $TITLE ?>","public_title":null,"options":["Default Title"],"price":72000,"weight":0,"compare_at_price":null,"inventory_management":"shopify","barcode":"","requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}}};
    Shopify.current_product['collections'] = Object.values({...[{"id":476455502142,"handle":"campaign-acc-iphone-adapter-2","updated_at":"2025-08-09T18:47:29+07:00","published_at":"2024-07-05T16:25:06+07:00","sort_order":"best-selling","template_suffix":"","published_scope":"global","title":"campaign ACC iphone Adapter -2","body_html":"\u003cp\u003ecampaign ACC iphone Adapter\u003c\/p\u003e\n\u003c!----\u003e"},{"id":458562928958,"handle":"globofilter-best-selling-products-index","title":"Smart Products Filter Index - Do not delete","updated_at":"2026-03-20T13:49:04+07:00","body_html":null,"published_at":"2024-02-16T11:59:58+07:00","sort_order":"best-selling","template_suffix":"plp","disjunctive":true,"rules":[{"column":"variant_price","relation":"greater_than","condition":"-9999"}],"published_scope":"global"},{"id":462824407358,"handle":"ipad-accessories","updated_at":"2026-03-20T11:23:58+07:00","published_at":"2023-10-11T12:10:00+07:00","sort_order":"manual","template_suffix":"","published_scope":"global","title":"Aksesori iPad","body_html":""},{"id":462824440126,"handle":"iphone-accessories","updated_at":"2026-03-20T11:23:58+07:00","published_at":"2023-10-11T12:11:25+07:00","sort_order":"created-desc","template_suffix":"","published_scope":"global","title":"Aksesori iPhone","body_html":""},{"id":462824374590,"handle":"mac-accessories","updated_at":"2026-03-20T10:48:08+07:00","published_at":"2023-10-11T12:08:23+07:00","sort_order":"manual","template_suffix":"","published_scope":"global","title":"Aksesori Mac","body_html":""}]});
    Shopify.current_product['variants_quantity'] = {};
    
    Shopify.current_product['variants_quantity']['48898152595774'] = "0" - 0;
    
    

    Shopify.current_collection = {...null};

    window.SECOMAPP = window.SECOMAPP || {};
    SECOMAPP.fg_codes = [];
    SECOMAPP.activateOnlyOnePromoCode = false;

    
    SECOMAPP.SHOPIFY_CART = {
        ...{"note":"","attributes":{},"original_total_price":0,"total_price":0,"total_discount":0,"total_weight":0.0,"item_count":0,"items":[],"requires_shipping":false,"currency":"IDR","items_subtotal_price":0,"cart_level_discount_applications":[],"checkout_charge_amount":0},
        discount_codes: [
            
        ]
    };

    
    
    SECOMAPP.fgData = {...{"storefront":{"access_token":"e96b4059637e1ebabd0b2f2d74a45239","created_at":"2024-11-11T03:52:36Z"}}};
    

    
    
    

    //liquid code to get customer history and customer tag
    
    
    SECOMAPP.current_template = "product";
    SECOMAPP.pathname = window.location.pathname;
    if (SECOMAPP.current_template === "404" && SECOMAPP.pathname?.includes("-sca_clone_freegift")) {
        window.location.replace(SECOMAPP.pathname.split("-sca_clone_freegift")[0]);
    } else if (SECOMAPP.current_template === "404" && SECOMAPP.pathname?.includes("/collections/sca_fg")) {
        window.location.replace(`${Shopify?.routes?.root ?? "/"}collections/all`);
    }

    SECOMAPP.setCookie = function (e, t, o, n, r) {
        let i = new Date;
        i.setTime(i.getTime() + 24 * o * 36e5 + 60 * n * 1e3);
        let f = "expires=" + i.toUTCString();
        document.cookie = e + "=" + t + ";" + f + (r ? ";path=" + r : ";path=/");
    };
    SECOMAPP.deleteCookie = function (e, t) {
        document.cookie = e + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; " + (t ? ";path=" + t : ";path=/")
    };
    SECOMAPP.getCookie = function (e) {
        for (let t = e + "=", o = document.cookie.split(";"), n = 0; n < o.length; n++) {
            let r;
            for (r = o[n]; " " === r.charAt(0);) r = r.substring(1);
            if (0 === r.indexOf(t)) return r.substring(t.length, r.length)
        }
        return ""
    };
    SECOMAPP.getQueryString = function (key) {
        let e = {};
        let t = window.location.search.substring(1).split("&");
        let o = 0;
        for (; o < t.length; o++) {
            let n = t[o].split("=");
            if (void 0 === e[n[0]]) e[n[0]] = decodeURIComponent(n[1]);
            else if ("string" == typeof e[n[0]]) {
                e[n[0]] = [e[n[0]], decodeURIComponent(n[1])]
            } else e[n[0]].push(decodeURIComponent(n[1]))
        }
        return key ? e?.[key] : e;
    };

    SECOMAPP.offer_codes = [
        {param: "freegifts_code", cookie: "sca_fg_codes"},
        {param: "bundles_code", cookie: "sca_bundle_codes"},
        {param: "upsells_code", cookie: "sca_upsell_codes"},
        {param: "discounts_code", cookie: "sca_discount_codes"},
    ];
    SECOMAPP.offer_codes.forEach(({param, cookie}) => {
        SECOMAPP.fg_codes = [];
        SECOMAPP.getCookie(cookie) && (SECOMAPP.fg_codes = JSON.parse(SECOMAPP.getCookie(cookie)));
        SECOMAPP.current_code = SECOMAPP.getQueryString(param);
        SECOMAPP.current_code && !SECOMAPP.fg_codes.includes(SECOMAPP.current_code)
        && (function () {
            SECOMAPP.activateOnlyOnePromoCode && (SECOMAPP.fg_codes = []);
            SECOMAPP.fg_codes.push(SECOMAPP.current_code);
            SECOMAPP.setCookie(cookie, JSON.stringify(SECOMAPP.fg_codes));
        })();
    });

    SECOMAPP.customer = {};
    SECOMAPP.customer.orders = [];
    SECOMAPP.customer.freegifts = [];
    SECOMAPP.customer.freegifts_v2 = [];
    
    SECOMAPP.customer.email = "";
    SECOMAPP.customer.first_name = "";
    SECOMAPP.customer.last_name = "";
    SECOMAPP.customer.tags = Object.values({...null});
    SECOMAPP.customer.orders_count = "" - 0;
    SECOMAPP.customer.total_spent = "" - 0;
    SECOMAPP.customer.b2b = "" - 0;
    SECOMAPP.market = {
        id: "63086952766" - 0,
        handle: "th",
    };
    

    // get class name config from settings_data.json
    if (!Shopify.scaHandleConfigValue) {
        Shopify.scaHandleConfigValue = {
            ...null,
            ...null
        };
    }

    // add link proxy
    SECOMAPP.freegiftProxy = "/apps/secomapp_freegifts_get_order?ver=3.0";
    
    SECOMAPP.freegiftProxy = "/apps/secomapp_freegifts_get_order?ver=3.0";
    
    SECOMAPP.bogosCollectUrl = "https://collect.bogos.io/collect"
    SECOMAPP.bogosIntegrationUrl = "https://api.bogos.io/integrations"

    // get shop locales
    SECOMAPP.shop_locales = Object.values({
        ...[{"shop_locale":{"locale":"th","enabled":true,"primary":false,"published":true}},{"shop_locale":{"locale":"en","enabled":true,"primary":true,"published":true}}]
    });

    
    
    window.fgGiftIcon = "https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/fg-icon-red_small.png";
    window.fgWidgetIconsObj = {
        "widget-icon-1.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/widget-icon-1_small.png',
        "widget-icon-2.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/widget-icon-2_small.png',
        "widget-icon-3.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/widget-icon-3_small.png',
        "widget-icon-4.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/widget-icon-4_small.png',
        "widget-icon-5.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/widget-icon-5_small.png',
        "widget-icon-6.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/widget-icon-6_small.png',
        "widget-icon-7.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/widget-icon-7_small.png',
        "widget-icon-8.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/widget-icon-8_small.png'
    }

    window.fgStepIconsObj = {
        "step-icon-1.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/step-icon-1_small.png',
        "step-icon-2.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/step-icon-2_small.png',
        "step-icon-3.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/step-icon-3_small.png',
        "step-icon-4.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/step-icon-4_small.png',
        "step-icon-5.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/step-icon-5_small.png',
        "step-icon-6.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/step-icon-6_small.png',
        "step-icon-7.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/step-icon-7_small.png',
    }

    window.fgSummaryIconsObj = {
        "summary-icon-1.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/summary-icon-1_small.png',
        "summary-icon-2.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/summary-icon-2_small.png',
        "summary-icon-3.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/summary-icon-3_small.png',
        "summary-icon-4.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/summary-icon-4_small.png',
        "summary-icon-5.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/summary-icon-5_small.png',
        "summary-icon-6.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/summary-icon-6_small.png',
        "summary-icon-7.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/summary-icon-7_small.png',
        "summary-icon-8.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/summary-icon-8_small.png',
    }

    window.fgShippingIconsObj = {
        "shipping-icon-1.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/shipping-icon-1_small.png',
        "shipping-icon-2.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/shipping-icon-2_small.png',
        "shipping-icon-3.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/shipping-icon-3_small.png',
        "shipping-icon-4.png": 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/shipping-icon-4_small.png',
    }

    // variable from tools
    SECOMAPP.variables = {
        ...SECOMAPP.variables,
        ...null,
        ...[],
        shipping_product_img: 'https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/shipping_product_small.png'
    }

    window.fgResource = {
        gift: {
            js: ["https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/gift.min.js"]
        },
        bundle: {
            js: ["https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/bundle.min.js"],
            css: ["https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/bogos.bundle.min.css"]
        },
        upsell: {
            js: ["https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/upsell.min.js"],
            css: ["https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/bogos.upsell.min.css"]
        },
        discount: {
            js: ["https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/discount.min.js"],
            css: ["https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/bogos.discount.min.css"]
        },
        "bundle-page": {
            js: ["https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/bundle-page.min.js"],
            css: ["https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/bogos.bundle-page.min.css"]
        },
        booster: {
            js: ["https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/booster.min.js"],
            css: ["https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/bogos.booster.min.css"]
        }
    }
</script>

<script defer src="https://cdn.bogos.io/aXN0dWRpb2J5Y29wcGVyd2lyZWQubXlzaG9waWZ5LmNvbQ==/freegifts_data_1771300875.min.js"></script>
<div id="secomapp_freegifts_url" data-url="https://cdn.bogos.io/aXN0dWRpb2J5Y29wcGVyd2lyZWQubXlzaG9waWZ5LmNvbQ==/freegifts_data_1771300875.min.js"></div>


<div id="bogos-gift-script" data-url="https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/gift.min.js"></div> 
<div id="bogos-bundle-script" data-url="https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/bundle.min.js"></div>
<div id="bogos-upsell-script" data-url="https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/upsell.min.js"></div>
<div id="bogos-discount-script" data-url="https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/discount.min.js"></div>
<div id="bogos-bundle-page-script" data-url="https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/bundle-page.min.js"></div>
<div id="bogos-booster-script" data-url="https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/booster.min.js"></div>
<div id="bogos-booster-page-script" data-url="https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/booster-page.min.js"></div>


<div id="bogos-bundle-style" data-url="https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/bogos.bundle.min.css"></div>
<div id="bogos-upsell-style" data-url="https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/bogos.upsell.min.css"></div>
<div id="bogos-discount-style" data-url="https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/bogos.discount.min.css"></div>
<div id="bogos-bundle-page-style" data-url="https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/bogos.bundle-page.min.css"></div>
<div id="bogos-booster-style" data-url="https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/bogos.booster.min.css"></div>
<div id="bogos-booster-page-style" data-url="https://cdn.shopify.com/extensions/019ce539-7298-7b38-8edc-7e1aa2a138a9/freegifts-182/assets/bogos.booster-page.min.css"></div>
<!-- END app snippet -->




</div><div id="shopify-block-Ab3NWekVWZ0d1WEdmR__497739090016974244" class="shopify-block shopify-app-block insider-object-extension">
















    






<script>
    window.insider_object = window.insider_object || {};
    window.shopifyIO = true;
</script>


    
        
            <script>
                window.insider_object.parsePrice = function (str) {
                    str = (str || '').toString();
                    let price = 0;

                    price = str.replace(/[^0-9.,]/g, '');

                    if (price.slice(-3).indexOf(',') !== -1) {
                        price = parseFloat(str.replace(/[^0-9,]/g, '').replace(',', '.')) || 0;
                    } else if (price.slice(-3).indexOf('.') !== -1) {
                        price = parseFloat(str.replace(/[^0-9.]/g, '')) || 0;
                    } else {
                        price = parseFloat(str.replace(/[^0-9]/g, '')) || 0;
                    }

                    return price;
                }
            </script>
            <script>
                
                    
                    
                    
                    

                    window.insider_object.page = {
                        "version": "2.0",
                        "type": "Product"
                    };

                

                window.insider_object.product = {
                    "id": "48898152595774",
                    "name": "<?php echo $TITLE ?>",
                    "taxonomy": [
                        <!-- BEGIN app snippet: product-taxonomy -->
        
            "campaign ACC iphone Adapter -2",
        
            "Smart Products Filter Index - Do not delete",
        
            "Aksesori iPad",
        
            "Aksesori iPhone",
        
            "Aksesori Mac"
        

    

<!-- END app snippet -->
                    ],
                    "currency": "IDR",
                    
                    "unit_price": window.insider_object.parsePrice("720.00"),
                    "unit_sale_price": window.insider_object.parsePrice("720.00"),
                    
                    "url": "<?php echo $URL ?>?variant=48898152595774",
                    "stock": 0,
                    "product_image_url":  "<?php echo $BANNER ?>", 
                    "description": "Charger PowerJoy 27W, pengisian cepat, dapat mengisi 2 perangkat sekaligus, mudah dibawa, dari brand INNERGIECharger PowerJoy 27W dapat mengisi dua perangkat sekaligus melalui port USB-C + USB-A dengan output hingga 5.4A dan kompatibel untuk ponsel, tablet, hingga MacBook Anda. Desainnya seukuran telapak tangan, ringan, mudah dibawa, dan mendukung pengisian cepat di mana saja. Dilengkapi sistem keamanan untuk perlindungan arus berlebih, suhu berlebih, dan korsleting, cocok digunakan di rumah, kantor, maupun saat bepergian",
                    "groupcode": "10856143159614",
                    "quantity": 0,
                    "currency": "IDR",
                    "sku": "4710901730444",
                    
                    "locale": "th_" + window.Shopify.country,
                    
                    "in_stock": 0,
                    "custom":{
                        "vendor": "Innergie",
                        "tags": [],
                        "product_type": "Perangkat pengisian daya",
                        "handle": "powerjoy-27m-us-plug",
                        "product_id": "10856143159614",
                        "barcode": "",
                        "weight": "0",
                        "weight_unit": "kg",
                        "taxable": true,
                        "requires_shipping": true,
                        "inventory_management": "shopify",
                        "inventory_policy": "deny"
                    },
                    "variants": [{"id":48898152595774,"title":"Default Title","option1":"Default Title","option2":null,"option3":null,"sku":"4710901730444","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"<?php echo $TITLE ?>","public_title":null,"options":["Default Title"],"price":72000,"weight":0,"compare_at_price":null,"inventory_management":"shopify","barcode":"","requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}}],
                };

                
                
                if ("title" === "size" ||
                    "title" === "color") {
                    window.insider_object.product["title"] = "Default Title";
                } else {
                    window.insider_object.product.custom["title"] = "Default Title";
                }
                
                

                window.insider_object.visited_products = JSON.parse(window.localStorage.getItem('ins-shopify-products-info') || '{}').value || {};
                window.insider_object.visited_products["10856143159614"] = {
                    url: "<?php echo $URL ?>",
                    taxonomy: [
                        <!-- BEGIN app snippet: product-taxonomy -->
        
            "campaign ACC iphone Adapter -2",
        
            "Smart Products Filter Index - Do not delete",
        
            "Aksesori iPad",
        
            "Aksesori iPhone",
        
            "Aksesori Mac"
        

    

<!-- END app snippet -->
                    ],
                };
                window.localStorage.setItem('ins-shopify-products-info', JSON.stringify({
                    value: window.insider_object.visited_products,
                    _expires: new Date().getTime() + 10*24*60*60*1000,
                }));

                
            </script>
            <script>
                
                window.insider_object.user = {
                    "language" : "th".substring(0, 2) + "_TH",
                    "market_locale_id": "63086952766",
                    "market_locale_handle": "th",
                    "market_country_code": "TH",
                    "shop_locale": "th"
                };
                

                window.localStorage.setItem('ins-shopify-user-language', JSON.stringify({
                    value: window.insider_object.user.language,
                    _expires: new Date().getTime() + 10*24*60*60*1000,
                }));
            </script>
            
            <script>
                
                window.insider_object.basket = {
                    "currency": "IDR"
                    
                };
            </script>
            <!-- BEGIN app snippet: cart-token-collector --><script>
    function throttle(func, limit) {
        let inThrottle;
        return function executedFunction(...args) {
            if (!inThrottle) {
                func(...args);
                inThrottle = true;
                setTimeout(function() {
                    inThrottle = false;
                }, limit);
            }
        };
    }

    async function handleUserInfoUpdate() {
        const userInfo = {
            oldCartToken: window.localStorage.getItem('ins-old-cart-token'),
            oldInsiderId: window.localStorage.getItem('ins-old-insider-id'),
            newInsiderId: Insider.getUserId(),
            newCartToken: await getCartToken(),
            insiderSessionId: Insider.getUserSession()
        };
        const isInfoChanged = userInfo.oldCartToken !== userInfo.newCartToken ||
            userInfo.oldInsiderId !== userInfo.newInsiderId

        if (!userInfo.newInsiderId || !userInfo.newCartToken || !userInfo.insiderSessionId) {
          return;
        }

        if (isInfoChanged) {
            sendUserInfoRequest(userInfo);
        }
    }

    function sendUserInfoRequest(userInfo) {
        let url =
            'https://sfyapp.useinsider.com/cart-token-collector/v2/save/' +
            Shopify.shop +
            '?' +
            'iid=' + userInfo.newInsiderId +
            '&ct=' + userInfo.newCartToken +
            '&sid=' + userInfo.insiderSessionId +
            '&oldCt=' + (userInfo.oldCartToken || '');

        let request = new XMLHttpRequest();
        request.onload = function() {
            if (this.status >= 200 && this.status < 300) {
                setUserInfos(userInfo);
            }
        };
        request.open('GET', url, true);
        request.send();
    }

    function setUserInfos(userInfo) {
        window.localStorage.setItem('ins-old-cart-token', userInfo.newCartToken);
        window.localStorage.setItem('ins-old-insider-id', userInfo.newInsiderId);
    }

    async function getCartToken() {
        const response = await fetch(window.Shopify.routes.root + 'cart.js');
        const data = await response.json();

        return data.item_count > 0 ? data.token : null;
    }

    window.addEventListener('insider:api-initialized', throttle(handleUserInfoUpdate, 2000));
    window.addEventListener('cart:amount:update', throttle(handleUserInfoUpdate, 2000));
</script>
<!-- END app snippet -->
        
    
    
        
            
                <script async type="text/javascript" src=https://istudio.api.useinsider.com/ins.js?id=10004274></script>
            
        
    


</div></body>
</html>