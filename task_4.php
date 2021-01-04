<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <?php
                                $list_items = [
                                    [
                                        "title" => "My Tasks",
                                        "span_value" => "130 / 500",
                                        "class_bar" => "bg-fusion-400",
                                        "role" => "progressbar",
                                        "style" => "width: 65%;",
                                        "aria-valuenow" => "65",
                                        "aria-valuemin" => "0",
                                        "aria-valuemax" => "100"
                                    ],
                                    [
                                        "title" => "Transfered",
                                        "span_value" => "440 TB",
                                        "class_bar" => "bg-success-500",
                                        "role" => "progressbar",
                                        "style" => "width: 34%;",
                                        "aria-valuenow" => "34",
                                        "aria-valuemin" => "0",
                                        "aria-valuemax" => "100"
                                    ],
                                    [
                                        "title" => "Bugs Squashed",
                                        "span_value" => "77%",
                                        "class_bar" => "bg-info-400",
                                        "role" => "progressbar",
                                        "style" => "width: 77%;",
                                        "aria-valuenow" => "77",
                                        "aria-valuemin" => "0",
                                        "aria-valuemax" => "100"
                                    ],
                                    [
                                        "title" => "User Testing",
                                        "span_value" => "7 days",
                                        "class_bar" => "bg-primary-300",
                                        "role" => "progressbar",
                                        "style" => "width: 84%;",
                                        "aria-valuenow" => "84",
                                        "aria-valuemin" => "0",
                                        "aria-valuemax" => "100"
                                    ]
                                ];

                                foreach($list_items as $item)
                                {
                                    echo "<div class=\"d-flex mt-2\">".$item['title']
                                    ."<span class=\"d-inline-block ml-auto\">".$item['span_value']
                                    ."</span></div>"
                                    ."<div class=\"progress progress-sm mb-3\"><div class=\"progress-bar ".$item['class_bar']
                                    ."\" role=\"".$item['role']
                                    ."\" style=\"".$item['style']
                                    ."\" aria-valuenow=\"".$item['aria-valuenow']
                                    ."\" aria-valuemin=\"".$item['aria-valuemin']
                                    ."\" aria-valuemax=\"".$item['aria-valuemax']
                                    ."\"></div></div>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>