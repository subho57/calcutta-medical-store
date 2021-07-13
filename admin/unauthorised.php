<!DOCTYPE html>
<html>

<head>
    <title>You're Unauthorized</title>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <style type="text/css">
        body {
            background-color: #eee;
        }

        body,
        h1,
        p {
            font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: normal;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            margin-left: auto;
            margin-right: auto;
            margin-top: 177px;
            max-width: 1170px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .row:before,
        .row:after {
            display: table;
            content: " ";
        }

        .col-md-6 {
            width: 50%;
        }

        .col-md-push-3 {
            margin-left: 25%;
        }

        h1 {
            font-size: 48px;
            font-weight: 300;
            margin: 0 0 20px 0;
        }

        .lead {
            font-size: 21px;
            font-weight: 200;
            margin-bottom: 20px;
        }

        p {
            margin: 0 0 10px;
        }

        a {
            color: #3282e6;
            text-decoration: none;
        }

        .watermark {
            text-align: right;
            position: fixed;
            z-index: 9999999;
            bottom: 15px;
            width: auto;
            right: 3%;
            cursor: pointer;
            line-height: 0;
            display: block !important;
        }

        @media (max-width: 650px) {
            .watermark {
                visibility: hidden;
            }

            .watermark span {
                text-align: center;
            }
        }
    </style>
</head>

<body>
<div class="container text-center" id="error">
    <svg height="100" width="100">
        <polygon points="50,25 17,80 82,80" stroke-linejoin="round"
                 style="fill:none;stroke:#ff8a00;stroke-width:8"/>
        <text fill="#ff8a00" font-family="sans-serif" font-size="42px" font-weight="900" x="42" y="74">!</text>
    </svg>
    <div class="row">
        <div class="col-md-12">
            <div class="main-icon text-warning"><span class="uxicon uxicon-alert"></span></div>
            <h1>You're Not Authorized</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-push-3">
            <p class="lead">Access denied to view this page.</p>
        </div>
    </div>
</div>
</body>
<div class="watermark">
    <a href="https://www.vibgyoradvisors.com" target="_blank"
       title="All rights reserved © Indian By Choice"><span
                style="font-family: Verdana,monospace; font-size:small; color: black; font-weight:500">All rights
            reserved © Indian By Choice.</span></a>
</div>

</html>