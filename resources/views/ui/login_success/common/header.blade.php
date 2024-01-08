<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('assets/extras/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('assets/extras/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.2/tinymce.min.js"></script>
    <script src="{{ url('assets/js/langs/nl.js') }}"></script>
    <script src="https://prowriting.azureedge.net/beyondgrammar-tinymce/1.0.57/dist/beyond-grammar-plugin.js"></script>
    <script type="text/javascript">    
        tinymce.init({
        selector: '#feed_description',
        language: 'nl',
        branding: false,
        height: 300,
        theme: 'modern',
        apply_source_formatting : false,
        plugins: ["paste", "BeyondGrammar", 'link', "print", "preview", "fullpage", "searchreplace", "autolink", "directionality", "visualblocks", "visualchars", "fullscreen", "image", "link", "media", "template", "codesample", "table", "charmap", "hr", "pagebreak", "nonbreaking", "anchor", "toc", "insertdatetime", "advlist", "lists", "textcolor", "wordcount", "imagetools", "contextmenu", "colorpicker", "textpattern", "help"],
        toolbar: ["undo redo | styleselect | fontselect | bold italic link | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent"
        ],
        //all options placed in `bgOptions` object
        bgOptions: {
            service: {
            //localization for BeyondGrammar interface, will be used default or got by system information, please use same version with the plugin.
          i18n: {
            en: "https://prowriting.azureedge.net/beyondgrammar-tinymce/1.0.16/dist/i18n-en.js",
            /*nl:"{{ url('assets/js/langs/nl.js') }}"*/
          },

          //You should signup for getting this key
          apiKey: "E8FEF7AE-3F36-4EAF-A451-456D05E6F2A3",

          //[optional] You can specify it for permanent access to your settings and dictionaries
          //userId: "<YOUR_USER_ID>",

          //[optional] path to js file with BeyondGrammar Core
          //sourcePath : "", 

          //[optional] path to service which provides grammar checking
          // url shouldn's contains / in the end
          //serviceUrl : "https://rtg.prowritingaid.com/api/v1", 
        },
        grammar: {
          //[optional] Default language [en-US, en-GB],
          languageIsoCode: "nl",

          //[optional] checking Style. By default is "true"
          checkStyle: true,

          //[optional] checking Spelling. By default is "true"
          checkSpelling: true,

          //[optional] checking Grammar. By default is "true"
          checkGrammar: true,

          //[optional] Show thesaurus information by double click, by default true
          showThesaurusByDoubleClick: true,

          //[optional] Showing context thesaurus, works only if showThesaurusByDoubleClick = true, by default false
          showContextThesaurus: false,
        }
      }
    });
    </script>
    <style>
    .continue {
        height: 48px;
        font-size: 13px;
        background-color: #0d8065;
        border: none;
        }
    .white{
        color:#FFF;
    }
    button.btn.btn-block.continue.white.mt-2:hover{
        color:#FFF;
    }
    </style>
</head>
<body id="page-top">