<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/threecolumn.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="www.techonthenet.com">
<!-- InstanceBeginEditable name="Meta-title" -->
<meta name="description" content="This MySQL tutorial explains how to use the MySQL BETWEEN condition with syntax and examples. The MySQL BETWEEN condition is used to retrieve values within a range in a SELECT, INSERT, UPDATE, or DELETE statement.">
<meta name="keywords" content="techonthenet, tech on the net, totn, mysql, mysql between condition, syntax, parameters, arguments, example, tutorial">
<title>MySQL: BETWEEN Condition</title>
<!-- InstanceEndEditable -->
<link rel="canonical" href="https://www.techonthenet.com/mysql/between.php">
<link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="apple-touch-icon" href="/apple-touch-icon-57x57.png" sizes="57x57">
<link rel="apple-touch-icon" href="/apple-touch-icon-60x60.png" sizes="60x60">
<link rel="apple-touch-icon" href="/apple-touch-icon-72x72.png" sizes="72x72">
<link rel="apple-touch-icon" href="/apple-touch-icon-76x76.png" sizes="76x76">
<link rel="apple-touch-icon" href="/apple-touch-icon-114x114.png" sizes="114x114">
<link rel="apple-touch-icon" href="/apple-touch-icon-120x120.png" sizes="120x120">
<link rel="apple-touch-icon" href="/apple-touch-icon-144x144.png" sizes="144x144">
<link rel="apple-touch-icon" href="/apple-touch-icon-152x152.png" sizes="152x152">
<link rel="apple-touch-icon" href="/apple-touch-icon-180x180.png" sizes="180x180">
<link rel="stylesheet" href="/stylesheets/main.css?v=202302280" type="text/css">
<style>#consent,#c33b4ebc{position:fixed;bottom:0;right:0;left:0;z-index:2000000;color:#fff;background:#1565c0}#consent a,#c33b4ebc a{color:#ffeb3b;text-decoration:underline}#consent button,#c33b4ebc button,#c33b4ebc img{position:absolute}#c33b4ebc{padding:25px 60px 25px 80px}#c33b4ebc img{top:25px;left:10px}#c33b4ebc button{right:10px;top:0;padding:0;font-size:24px;background:#1565c0;border:0}#consent{padding:30px 100px 30px 20px}#consent button{top:50%;right:20px;margin-top:-18px;background:#42a5f5}
.b442ff6c{overflow:hidden}.b442ff6c>p{margin:0;padding:0;height:12px;font-size:12px;line-height:12px;color:#000;text-align:center}.b442ff6c>div{margin:0 auto;background:#ddd}.b442ff6c iframe{display:block;margin:0 auto}.cb006f51{padding:2px 0 15px}.cb006f51>div{width:728px;height:90px}.bc5adf5a{margin-top:35px}.bc5adf5a>div{width:160px;height:600px}.effe787e{margin:20px auto}.effe787e>div{width:300px;height:250px}.f12862a4>div{margin-bottom:10px;background:#fff}</style>
<style media="screen and (max-width: 767px)">.cb006f51>div{width:320px;height:50px;}.bc5adf5a{display:none;}</style>
<style media="print">.b442ff6c{display:none!important;}</style>
<script>window.oldie = !!document.documentMode;</script>
<!--[if IE]>
<script>window.oldie = true;</script>
<![endif]-->
<script async src="/javascript/pb20230410.js"></script>
</head>
<body>
<a href="/hpot.php"></a>
<div class="b442ff6c cb006f51"><p>Advertisements</p><div id="cb006f51_slot"></div></div>
<div id="header" role="banner">
<div class="top_nav">
<svg id="menu_link" width="24" height="24" focusable="false" role="img" aria-hidden="true" viewBox="0 0 24 24" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="m2.5 18.7c0-.5.4-.8.9-.8h17.3c.5 0 .9.4.9.8 0 .5-.4.8-.9.8h-17.3c-.5 0-.9-.4-.9-.8zm0-6.7c0-.5.4-.8.9-.8h17.3c.5 0 .9.4.9.8s-.4.8-.9.8h-17.3c-.5 0-.9-.3-.9-.8zm0-6.7c0-.5.4-.8.9-.8h17.3c.5 0 .9.4.9.8 0 .5-.4.8-.9.8h-17.3c-.5.1-.9-.3-.9-.8z" fill-rule="evenodd"/></svg>
<img alt="TechOnTheNet Logo" src="/images/logo.png">
</div>
<div class="breadcrumb menu" role="navigation">
<a href="/search_results.php"><svg class="search_link" width="21" height="21" focusable="false" role="img" aria-hidden="true" clip-rule="evenodd" fill-rule="evenodd" stroke-linecap="round" viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg"><path d="m12.014 11.855c2.538-2.575 2.5-6.711-.086-9.239-2.586-2.527-6.74-2.488-9.278.086-2.539 2.574-2.501 6.71.085 9.238 2.552 2.494 6.641 2.494 9.194 0l7.29 7.258m-3.903-4.995 4.717 4.695-1.115 1.111-4.718-4.697" fill="none" stroke="#fff" stroke-width="1.09"/></svg></a>
<ol>
<li><a href="/index.php"><svg width="24" height="24" focusable="false" role="img" aria-hidden="true" viewBox="0 0 24 24" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path d="m9.7 16.7v5.5c0 .4-.3.8-.8.8h-6.1c-.5 0-.8-.4-.8-.8v-11c0-.2.1-.4.2-.6l9.2-9.4c.3-.3.8-.3 1.1 0l9.2 9.4c.1.1.2.3.2.6v11c0 .4-.3.8-.8.8h-6.2c-.4 0-.8-.4-.8-.8v-5.5c0-.4-.4-.8-.8-.8h-3.1c-.1 0-.5.4-.5.8z"/><path clip-rule="evenodd" d="m19.7 3.4v5.5l-3.1-3.1v-2.4c0-.4.3-.8.8-.8h1.5c.4 0 .8.3.8.8z" fill-rule="evenodd"/></svg><span class="home">Home</span></a></li>
<li><a href="/mysql/index.php">MySQL</a></li>
</ol>
</div>
</div>
<noscript><div class="jsdisabled">JavaScript is required for this website to work properly. Please re-enable JavaScript in your browser settings.</div></noscript>
<div id="main">
<div id="sidebar" class="menu" role="navigation">
<ul class="notranslate">
<li>Databases</li>
<li><a href="/sql/index.php">SQL</a></li>
<li><a href="/oracle/index.php">Oracle / PLSQL</a></li>
<li><a href="/sql_server/index.php">SQL Server</a></li>
<li class="active_page"><a href="/mysql/index.php">MySQL</a></li>
<li><a href="/mariadb/index.php">MariaDB</a></li>
<li><a href="/postgresql/index.php">PostgreSQL</a></li>
<li><a href="/sqlite/index.php">SQLite</a></li>
</ul>
<ul class="notranslate">
<li>MS Office</li>
<li><a href="/excel/index.php">Excel</a></li>
<li><a href="/access/index.php">Access</a></li>
<li><a href="/word/index.php">Word</a></li>
</ul>
<ul class="notranslate">
<li>Web Development</li>
<li><a href="/html/index.php">HTML</a></li>
<li><a href="/css/index.php">CSS</a></li>
<li><a href="/js/index.php">JavaScript</a></li>
<li><a href="/color_picker/index.php">Color Picker</a></li>
</ul>
<ul class="notranslate">
<li>Programming</li>
<li><a href="/c_language/index.php">C Language</a></li>
</ul>
<ul class="notranslate">
<li>More</li>
<li><a href="/ascii/chart.php">ASCII</a></li>
<li><a href="/unicode/chart.php">Unicode</a></li>
<li><a href="/linux/index.php">Linux</a></li>
<li><a href="/unix/index.php">UNIX</a></li>
<li><a href="/joke.php">Techie Humor</a></li>
</ul>
<div class="b442ff6c bc5adf5a"><p>Advertisements</p><div id="bc5adf5a_slot"></div></div>
</div>
<div id="right_sidebar" class="menu" role="complementary">
<!-- InstanceBeginEditable name="RightNav" -->
<div class="collapsible_filter">
<input id="collapsible_filter" type="text" placeholder="Filter items">
<img id="clear_filter" src="/images/collapsible_clear.png" alt="clear filter">
</div>
<div id="collapsible" data-page="2436">
<div class="expanded" data-category="87"><img src="/images/caret_down.png" alt="down caret"><h3>MySQL Basics</h3>
<ul>
<li><a href="/mysql/alias.php">ALIASES</a></li>
<li><a href="/mysql/and.php">AND</a></li>
<li><a href="/mysql/and_or.php">AND &amp; OR</a></li>
<li class="active_page">BETWEEN</li>
<li><a href="/mysql/comparison_operators.php">COMPARISON OPERATORS</a></li>
<li><a href="/mysql/delete.php">DELETE</a></li>
<li><a href="/mysql/delete_limit.php">DELETE LIMIT</a></li>
<li><a href="/mysql/distinct.php">DISTINCT</a></li>
<li><a href="/mysql/exists.php">EXISTS</a></li>
<li><a href="/mysql/from.php">FROM</a></li>
<li><a href="/mysql/group_by.php">GROUP BY</a></li>
<li><a href="/mysql/having.php">HAVING</a></li>
<li><a href="/mysql/in.php">IN</a></li>
<li><a href="/mysql/insert.php">INSERT</a></li>
<li><a href="/mysql/intersect.php">INTERSECT</a></li>
<li><a href="/mysql/is_not_null.php">IS NOT NULL</a></li>
<li><a href="/mysql/is_null.php">IS NULL</a></li>
<li><a href="/mysql/joins.php">JOIN</a></li>
<li><a href="/mysql/like.php">LIKE</a></li>
<li><a href="/mysql/not.php">NOT</a></li>
<li><a href="/mysql/or.php">OR</a></li>
<li><a href="/mysql/order_by.php">ORDER BY</a></li>
<li><a href="/mysql/select.php">SELECT</a></li>
<li><a href="/mysql/select_limit.php">SELECT LIMIT</a></li>
<li><a href="/mysql/subqueries.php">SUBQUERY</a></li>
<li><a href="/mysql/truncate.php">TRUNCATE</a></li>
<li><a href="/mysql/union.php">UNION</a></li>
<li><a href="/mysql/union_all.php">UNION ALL</a></li>
<li><a href="/mysql/update.php">UPDATE</a></li>
<li><a href="/mysql/where.php">WHERE</a></li>
</ul>
</div>
<div class="expandable" data-category="89"><img src="/images/caret_right.png" alt="right caret"><h3>MySQL Advanced</h3>
<ul class="hidden">
<li><a href="/mysql/tables/alter_table.php">Alter Table</a></li>
<li><a href="/mysql/auto_increment.php">AUTO_INCREMENT</a></li>
<li><a href="/mysql/change_password.php">Change Password</a></li>
<li><a href="/mysql/comments.php">Comments in SQL</a></li>
<li><a href="/mysql/tables/create_table.php">Create Table</a></li>
<li><a href="/mysql/tables/create_table_as.php">Create Table As</a></li>
<li><a href="/mysql/users/create_user.php">Create User</a></li>
<li><a href="/mysql/datatypes.php">Data Types</a></li>
<li><a href="/mysql/declare_vars.php">Declare Variables</a></li>
<li><a href="/mysql/tables/drop_table.php">Drop Table</a></li>
<li><a href="/mysql/users/drop_user.php">Drop User</a></li>
<li><a href="/mysql/questions/find_users.php">Find Users</a></li>
<li><a href="/mysql/questions/find_users_logged_in.php">Find Users Logged In</a></li>
<li><a href="/mysql/functions.php">Functions</a></li>
<li><a href="/mysql/grant_revoke.php">Grant/Revoke Privileges</a></li>
<li><a href="/mysql/indexes.php">Indexes</a></li>
<li><a href="/mysql/literals.php">Literals</a></li>
<li><a href="/mysql/primary_keys.php">Primary Key</a></li>
<li><a href="/mysql/procedures.php">Procedures</a></li>
<li><a href="/mysql/users/rename_user.php">Rename User</a></li>
<li><a href="/mysql/questions/show_grants.php">Show Grants</a></li>
<li><a href="/mysql/unique.php">Unique Constraints</a></li>
<li><a href="/mysql/views.php">Views</a></li>
</ul>
</div>
<div class="expandable" data-category="193"><img src="/images/caret_right.png" alt="right caret"><h3>MySQL Cursors</h3>
<ul class="hidden">
<li><a href="/mysql/cursors/close.php">Close Cursor</a></li>
<li><a href="/mysql/cursors/not_found.php">Cursor NOT FOUND</a></li>
<li><a href="/mysql/cursors/declare.php">Declare Cursor</a></li>
<li><a href="/mysql/cursors/fetch.php">Fetch Cursor</a></li>
<li><a href="/mysql/cursors/open.php">Open Cursor</a></li>
</ul>
</div>
<div class="expandable" data-category="194"><img src="/images/caret_right.png" alt="right caret"><h3>MySQL Loops/Conditionals</h3>
<ul class="hidden">
<li><a href="/mysql/loops/case.php">CASE</a></li>
<li><a href="/mysql/loops/if_then.php">IF-THEN-ELSE</a></li>
<li><a href="/mysql/loops/iterate.php">ITERATE</a></li>
<li><a href="/mysql/loops/leave.php">LEAVE</a></li>
<li><a href="/mysql/loops/gen_loop.php">LOOP</a></li>
<li><a href="/mysql/loops/repeat.php">REPEAT Loop</a></li>
<li><a href="/mysql/loops/return.php">RETURN</a></li>
<li><a href="/mysql/loops/while.php">WHILE Loop</a></li>
</ul>
</div>
<div class="expandable" data-category="196"><img src="/images/caret_right.png" alt="right caret"><h3>MySQL Triggers</h3>
<ul class="hidden">
<li><a href="/mysql/triggers/after_delete.php">After Delete Trigger</a></li>
<li><a href="/mysql/triggers/after_insert.php">After Insert Trigger</a></li>
<li><a href="/mysql/triggers/after_update.php">After Update Trigger</a></li>
<li><a href="/mysql/triggers/before_delete.php">Before Delete Trigger</a></li>
<li><a href="/mysql/triggers/before_insert.php">Before Insert Trigger</a></li>
<li><a href="/mysql/triggers/before_update.php">Before Update Trigger</a></li>
<li><a href="/mysql/triggers/drop.php">Drop Trigger</a></li>
</ul>
</div>
<div class="expandable" data-category="23"><img src="/images/caret_right.png" alt="right caret"><h3>String Functions</h3>
<ul class="hidden">
<li><a href="/mysql/functions/ascii.php">ASCII</a></li>
<li><a href="/mysql/functions/char_length.php">CHAR_LENGTH</a></li>
<li><a href="/mysql/functions/character_length.php">CHARACTER_LENGTH</a></li>
<li><a href="/mysql/functions/concat.php">CONCAT</a></li>
<li><a href="/mysql/functions/concat_ws.php">CONCAT_WS</a></li>
<li><a href="/mysql/functions/field.php">FIELD</a></li>
<li><a href="/mysql/functions/find_in_set.php">FIND_IN_SET</a></li>
<li><a href="/mysql/functions/format.php">FORMAT</a></li>
<li><a href="/mysql/functions/insert.php">INSERT</a></li>
<li><a href="/mysql/functions/instr.php">INSTR</a></li>
<li><a href="/mysql/functions/lcase.php">LCASE</a></li>
<li><a href="/mysql/functions/left.php">LEFT</a></li>
<li><a href="/mysql/functions/length.php">LENGTH</a></li>
<li><a href="/mysql/functions/locate.php">LOCATE</a></li>
<li><a href="/mysql/functions/lower.php">LOWER</a></li>
<li><a href="/mysql/functions/lpad.php">LPAD</a></li>
<li><a href="/mysql/functions/ltrim.php">LTRIM</a></li>
<li><a href="/mysql/functions/mid.php">MID</a></li>
<li><a href="/mysql/functions/position.php">POSITION</a></li>
<li><a href="/mysql/functions/repeat.php">REPEAT</a></li>
<li><a href="/mysql/functions/replace.php">REPLACE</a></li>
<li><a href="/mysql/functions/reverse.php">REVERSE</a></li>
<li><a href="/mysql/functions/right.php">RIGHT</a></li>
<li><a href="/mysql/functions/rpad.php">RPAD</a></li>
<li><a href="/mysql/functions/rtrim.php">RTRIM</a></li>
<li><a href="/mysql/functions/space.php">SPACE</a></li>
<li><a href="/mysql/functions/strcmp.php">STRCMP</a></li>
<li><a href="/mysql/functions/substr.php">SUBSTR</a></li>
<li><a href="/mysql/functions/substring.php">SUBSTRING</a></li>
<li><a href="/mysql/functions/substring_index.php">SUBSTRING_INDEX</a></li>
<li><a href="/mysql/functions/trim.php">TRIM</a></li>
<li><a href="/mysql/functions/ucase.php">UCASE</a></li>
<li><a href="/mysql/functions/upper.php">UPPER</a></li>
</ul>
</div>
<div class="expandable" data-category="21"><img src="/images/caret_right.png" alt="right caret"><h3>Numeric/Math Functions</h3>
<ul class="hidden">
<li><a href="/mysql/functions/abs.php">ABS</a></li>
<li><a href="/mysql/functions/acos.php">ACOS</a></li>
<li><a href="/mysql/functions/asin.php">ASIN</a></li>
<li><a href="/mysql/functions/atan.php">ATAN</a></li>
<li><a href="/mysql/functions/atan2.php">ATAN2</a></li>
<li><a href="/mysql/functions/avg.php">AVG</a></li>
<li><a href="/mysql/functions/ceil.php">CEIL</a></li>
<li><a href="/mysql/functions/ceiling.php">CEILING</a></li>
<li><a href="/mysql/functions/cos.php">COS</a></li>
<li><a href="/mysql/functions/cot.php">COT</a></li>
<li><a href="/mysql/functions/count.php">COUNT</a></li>
<li><a href="/mysql/functions/degrees.php">DEGREES</a></li>
<li><a href="/mysql/functions/div.php">DIV</a></li>
<li><a href="/mysql/functions/exp.php">EXP</a></li>
<li><a href="/mysql/functions/floor.php">FLOOR</a></li>
<li><a href="/mysql/functions/greatest.php">GREATEST</a></li>
<li><a href="/mysql/functions/least.php">LEAST</a></li>
<li><a href="/mysql/functions/ln.php">LN</a></li>
<li><a href="/mysql/functions/log.php">LOG</a></li>
<li><a href="/mysql/functions/log10.php">LOG10</a></li>
<li><a href="/mysql/functions/log2.php">LOG2</a></li>
<li><a href="/mysql/functions/max.php">MAX</a></li>
<li><a href="/mysql/functions/min.php">MIN</a></li>
<li><a href="/mysql/functions/mod.php">MOD</a></li>
<li><a href="/mysql/functions/pi.php">PI</a></li>
<li><a href="/mysql/functions/pow.php">POW</a></li>
<li><a href="/mysql/functions/power.php">POWER</a></li>
<li><a href="/mysql/functions/radians.php">RADIANS</a></li>
<li><a href="/mysql/functions/rand.php">RAND</a></li>
<li><a href="/mysql/functions/round.php">ROUND</a></li>
<li><a href="/mysql/functions/sign.php">SIGN</a></li>
<li><a href="/mysql/functions/sin.php">SIN</a></li>
<li><a href="/mysql/functions/sqrt.php">SQRT</a></li>
<li><a href="/mysql/functions/sum.php">SUM</a></li>
<li><a href="/mysql/functions/tan.php">TAN</a></li>
<li><a href="/mysql/functions/truncate.php">TRUNCATE</a></li>
</ul>
</div>
<div class="expandable" data-category="28"><img src="/images/caret_right.png" alt="right caret"><h3>Date/Time Functions</h3>
<ul class="hidden">
<li><a href="/mysql/functions/adddate.php">ADDDATE</a></li>
<li><a href="/mysql/functions/addtime.php">ADDTIME</a></li>
<li><a href="/mysql/functions/curdate.php">CURDATE</a></li>
<li><a href="/mysql/functions/current_date.php">CURRENT_DATE</a></li>
<li><a href="/mysql/functions/current_time.php">CURRENT_TIME</a></li>
<li><a href="/mysql/functions/current_timestamp.php">CURRENT_TIMESTAMP</a></li>
<li><a href="/mysql/functions/curtime.php">CURTIME</a></li>
<li><a href="/mysql/functions/date.php">DATE</a></li>
<li><a href="/mysql/functions/date_add.php">DATE_ADD</a></li>
<li><a href="/mysql/functions/date_format.php">DATE_FORMAT</a></li>
<li><a href="/mysql/functions/date_sub.php">DATE_SUB</a></li>
<li><a href="/mysql/functions/datediff.php">DATEDIFF</a></li>
<li><a href="/mysql/functions/day.php">DAY</a></li>
<li><a href="/mysql/functions/dayname.php">DAYNAME</a></li>
<li><a href="/mysql/functions/dayofmonth.php">DAYOFMONTH</a></li>
<li><a href="/mysql/functions/dayofweek.php">DAYOFWEEK</a></li>
<li><a href="/mysql/functions/dayofyear.php">DAYOFYEAR</a></li>
<li><a href="/mysql/functions/extract.php">EXTRACT</a></li>
<li><a href="/mysql/functions/from_days.php">FROM_DAYS</a></li>
<li><a href="/mysql/functions/hour.php">HOUR</a></li>
<li><a href="/mysql/functions/last_day.php">LAST_DAY</a></li>
<li><a href="/mysql/functions/localtime.php">LOCALTIME</a></li>
<li><a href="/mysql/functions/localtimestamp.php">LOCALTIMESTAMP</a></li>
<li><a href="/mysql/functions/makedate.php">MAKEDATE</a></li>
<li><a href="/mysql/functions/maketime.php">MAKETIME</a></li>
<li><a href="/mysql/functions/microsecond.php">MICROSECOND</a></li>
<li><a href="/mysql/functions/minute.php">MINUTE</a></li>
<li><a href="/mysql/functions/month.php">MONTH</a></li>
<li><a href="/mysql/functions/monthname.php">MONTHNAME</a></li>
<li><a href="/mysql/functions/now.php">NOW</a></li>
<li><a href="/mysql/functions/period_add.php">PERIOD_ADD</a></li>
<li><a href="/mysql/functions/period_diff.php">PERIOD_DIFF</a></li>
<li><a href="/mysql/functions/quarter.php">QUARTER</a></li>
<li><a href="/mysql/functions/sec_to_time.php">SEC_TO_TIME</a></li>
<li><a href="/mysql/functions/second.php">SECOND</a></li>
<li><a href="/mysql/functions/str_to_date.php">STR_TO_DATE</a></li>
<li><a href="/mysql/functions/subdate.php">SUBDATE</a></li>
<li><a href="/mysql/functions/subtime.php">SUBTIME</a></li>
<li><a href="/mysql/functions/sysdate.php">SYSDATE</a></li>
<li><a href="/mysql/functions/time.php">TIME</a></li>
<li><a href="/mysql/functions/time_format.php">TIME_FORMAT</a></li>
<li><a href="/mysql/functions/time_to_sec.php">TIME_TO_SEC</a></li>
<li><a href="/mysql/functions/timediff.php">TIMEDIFF</a></li>
<li><a href="/mysql/functions/timestamp.php">TIMESTAMP</a></li>
<li><a href="/mysql/functions/to_days.php">TO_DAYS</a></li>
<li><a href="/mysql/functions/week.php">WEEK</a></li>
<li><a href="/mysql/functions/weekday.php">WEEKDAY</a></li>
<li><a href="/mysql/functions/weekofyear.php">WEEKOFYEAR</a></li>
<li><a href="/mysql/functions/year.php">YEAR</a></li>
<li><a href="/mysql/functions/yearweek.php">YEARWEEK</a></li>
</ul>
</div>
<div class="expandable" data-category="84"><img src="/images/caret_right.png" alt="right caret"><h3>Advanced Functions</h3>
<ul class="hidden">
<li><a href="/mysql/functions/bin.php">BIN</a></li>
<li><a href="/mysql/functions/binary.php">BINARY</a></li>
<li><a href="/mysql/functions/case.php">CASE</a></li>
<li><a href="/mysql/functions/cast.php">CAST</a></li>
<li><a href="/mysql/functions/coalesce.php">COALESCE</a></li>
<li><a href="/mysql/functions/connection_id.php">CONNECTION_ID</a></li>
<li><a href="/mysql/functions/conv.php">CONV</a></li>
<li><a href="/mysql/functions/convert.php">CONVERT</a></li>
<li><a href="/mysql/functions/current_user.php">CURRENT_USER</a></li>
<li><a href="/mysql/functions/database.php">DATABASE</a></li>
<li><a href="/mysql/functions/if.php">IF</a></li>
<li><a href="/mysql/functions/ifnull.php">IFNULL</a></li>
<li><a href="/mysql/functions/isnull.php">ISNULL</a></li>
<li><a href="/mysql/functions/last_insert_id.php">LAST_INSERT_ID</a></li>
<li><a href="/mysql/functions/nullif.php">NULLIF</a></li>
<li><a href="/mysql/functions/session_user.php">SESSION_USER</a></li>
<li><a href="/mysql/functions/system_user.php">SYSTEM_USER</a></li>
<li><a href="/mysql/functions/user.php">USER</a></li>
<li><a href="/mysql/functions/version.php">VERSION</a></li>
</ul>
</div>
<div class="expandable" data-category="90"><img src="/images/caret_right.png" alt="right caret"><h3>Encryption Functions</h3>
<ul class="hidden">
<li><a href="/mysql/functions/encrypt.php">ENCRYPT</a></li>
<li><a href="/mysql/functions/md5.php">MD5</a></li>
<li><a href="/mysql/functions/old_password.php">OLD_PASSWORD</a></li>
<li><a href="/mysql/functions/password.php">PASSWORD</a></li>
</ul>
</div>
</div>
<!-- InstanceEndEditable -->
</div>
<div id="content" class="three_column">
<div class="page" role="main">
<div class="article">
<!-- InstanceBeginEditable name="Content" -->
<div><img class="img-responsive" src="/mysql/images/mysql.png" alt="totn MySQL" width="180" height="62"></div>
<hr>
<div class="section">
  <h1>MySQL: <span>BETWEEN Condition</span></h1>
  <p>This MySQL tutorial explains how to use the MySQL <strong>BETWEEN condition</strong> with syntax and examples.</p>
</div>
<div class="section">
  <h2>Description</h2>
  <p>The MySQL BETWEEN Condition is used to retrieve values within a range in a <a href="select.php">SELECT</a>, <a href="insert.php">INSERT</a>, <a href="update.php">UPDATE</a>, or <a href="delete.php">DELETE</a> statement.</p>
</div>
<div class="section">
  <h2>Syntax</h2>
  <p>The syntax for the BETWEEN Condition in MySQL is:</p>
  <pre class="notranslate">expression BETWEEN value1 AND value2;</pre>
  <h3>Parameters or Arguments</h3>
  <dl>
    <dt>expression</dt>
    <dd>A column or calculation.</dd>
    <dt>value1 and value2</dt>
    <dd>These values create an inclusive range that <em>expression</em> is compared to.</dd>
  </dl>
</div>
<div class="section">
  <h2>Note</h2>
  <ul>
    <li>The MySQL BETWEEN Condition will return the records where <em>expression</em> is within the range of <em>value1</em> and <em>value2</em> (inclusive).</li>
    <li>When using the MySQL BETWEEN Condition with dates, be sure to use the <a href="functions/cast.php">CAST function</a> to explicitly convert the values to dates.</li>
  </ul>
</div>
<div class="section">
  <h2>Example - With Numeric</h2>
  <p>Let's look at some MySQL BETWEEN condition examples using numeric values. The following numeric example uses the BETWEEN condition to retrieve values within a numeric range.</p>
  <p>For example:</p>
  <pre class="notranslate">SELECT *
FROM contacts
WHERE contact_id BETWEEN 100 AND 200;</pre>
  <p>This MySQL BETWEEN example would return all rows from the <em>contacts</em> table where the <em>contact_id</em> is between 100 and 200 (inclusive). It is equivalent to the following SELECT statement:</p>
  <pre class="notranslate">SELECT *
FROM contacts
WHERE contact_id &gt;= 100
AND contact_id &lt;= 200;</pre>
</div>
<div class="section">
  <h2>Example - With Date</h2>
  <p>Next, let's look at how you would use the MySQL BETWEEN condition with Dates. When using the BETWEEN condition in MySQL with dates, be sure to use the CAST function to explicitly convert the values to dates.</p>
  <p>The following date example uses the BETWEEN condition to retrieve values within a date range. <strong>Note that the <em>order_date</em> field is of type DATE and not of type DATETIME.</strong> (This is why we don't have to CAST the <em>order_date</em> field to a DATE type in the examples below.)</p>
  <p>For example:</p>
  <pre class="notranslate">SELECT *
FROM order_details
WHERE order_date BETWEEN CAST('2014-02-01' AS DATE) AND CAST('2014-02-28' AS DATE);</pre>
  <p>This MySQL BETWEEN condition example would return all records from the <em>order_details</em> table where the <em>order_date</em> is between Feb 1, 2014 and Feb 28, 2014 (inclusive). It would be equivalent to the following SELECT statement:</p>
  <pre class="notranslate">SELECT *
FROM order_details
WHERE order_date &gt;= CAST('2014-02-01' AS DATE)
AND order_date &lt;= CAST('2014-02-28' AS DATE);</pre>
</div>
<div class="section">
  <h2>Example - Using NOT Operator</h2>
  <p>The MySQL BETWEEN condition can also be combined with the<a href="not.php"> NOT operator</a>. Here is an example of how you would combine the BETWEEN condition with the NOT Operator.</p>
  <p>For example:</p>
  <pre class="notranslate">SELECT *
FROM suppliers
WHERE supplier_id NOT BETWEEN 2000 AND 2999;</pre>
  <p>This MySQL BETWEEN example would return all rows from the <em>suppliers</em> table where the <em>supplier_id</em> was NOT between 2000 and 2999, inclusive. It would be equivalent to the following SELECT statement:</p>
  <pre class="notranslate">SELECT *
FROM suppliers
WHERE supplier_id &lt; 2000
OR supplier_id &gt; 2999;</pre>
</div>
<div class="tutorial_nav">
<div>
<a class="btn btn-green" href="/mysql/joins.php"><img src="/images/previous.png" alt="previous"></a><a class="btn btn-green" href="/mysql/insert.php">NEXT<span>: INSERT</span><img src="/images/next.png" alt="next"></a></div>
</div>
<!-- InstanceEndEditable -->
</div>
<div class="sharepage">
<span>Share on:</span>
<div>
<a href="https://twitter.com/share?url=https%3A%2F%2Fwww.techonthenet.com%2Fmysql%2Fbetween.php&amp;via=tech_on_the_net&amp;text=Currently+reading+-+MySQL%3A+BETWEEN+Condition+at&amp;hashtags=mysql%2Csql" target="_blank" title="Tweet this"><svg width="32" height="32" focusable="false" role="img" aria-hidden="true" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><circle cx="16" cy="16" fill="#2daae1" r="15" stroke="#2daae1" stroke-width="1"/><path d="m2051.48 752.772c-58.96 26.163-122.29 43.849-188.87 51.799 67.96-40.692 120.01-105.174 144.59-181.918-64.55 38.339-135.19 65.331-208.86 79.8-59.96-63.905-145.45-103.803-240.03-103.803-181.55 0-328.79 147.178-328.79 328.833 0 25.739 2.9 50.849 8.47 74.957-273.296-13.735-515.592-144.647-677.774-343.569-28.319 48.582-44.528 105.068-44.528 165.335 0 114.071 58.06 214.714 146.281 273.674-52.223-1.62-103.307-15.72-148.968-41.11v4.15c0 159.34 113.332 292.2 263.773 322.42-27.636 7.57-56.638 11.52-86.642 11.52-21.214 0-41.796-2-61.902-5.78 41.846 130.59 163.29 225.66 307.144 228.34-112.543 88.22-254.351 140.81-408.371 140.81-26.528 0-52.746-1.58-78.484-4.68 145.547 93.33 318.361 147.81 504.07 147.81 604.821 0 935.601-501.07 935.601-935.604 0-14.266-.31-28.426-1-42.534 64.45-46.614 120.08-104.334 164.29-170.45z" fill="#fff" fill-rule="nonzero" transform="scale(.0128)"/></svg></a>
<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.techonthenet.com%2Fmysql%2Fbetween.php" target="_blank" title="Add to Facebook"><svg width="32" height="32" focusable="false" role="img" aria-hidden="true" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><circle cx="16" cy="16" fill="#3c5a9a" r="15" stroke="#3c5a9a" stroke-width="1"/><path d="m1656.58 383.684h-277.04c-164.32 0-347.1 69.113-347.1 307.309.8 82.997 0 162.483 0 251.94h-190.101v302.507h195.981v870.87h360.13v-876.62h237.7l21.51-297.606h-265.41s.59-132.39 0-170.836c0-94.13 97.94-88.74 103.84-88.74 46.6 0 137.23.136 160.49 0z" fill="#fff" fill-rule="nonzero" transform="scale(.0128)"/></svg></a>
</div>
</div>
</div>
<div class="b442ff6c effe787e"><p>Advertisements</p><div id="effe787e_slot"></div></div>
</div>
</div>
<div id="footer" role="contentinfo">
<p><a href="/index.php">Home</a><span> | </span><a href="/about_us.php">About Us</a><span> | </span><a href="/feedback.php">Contact Us</a><span> | </span><a href="/testimonials.php">Testimonials</a><span> | </span><a href="/donate.php">Donate</a></p>
<div class="social menu">
<a href="https://twitter.com/tech_on_the_net" target="_blank" title="Follow us on Twitter"><svg width="32" height="32" focusable="false" role="img" aria-hidden="true" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><circle cx="16" cy="16" fill="#2daae1" r="15" stroke="#fff" stroke-width="1"/><path d="m2051.48 752.772c-58.96 26.163-122.29 43.849-188.87 51.799 67.96-40.692 120.01-105.174 144.59-181.918-64.55 38.339-135.19 65.331-208.86 79.8-59.96-63.905-145.45-103.803-240.03-103.803-181.55 0-328.79 147.178-328.79 328.833 0 25.739 2.9 50.849 8.47 74.957-273.296-13.735-515.592-144.647-677.774-343.569-28.319 48.582-44.528 105.068-44.528 165.335 0 114.071 58.06 214.714 146.281 273.674-52.223-1.62-103.307-15.72-148.968-41.11v4.15c0 159.34 113.332 292.2 263.773 322.42-27.636 7.57-56.638 11.52-86.642 11.52-21.214 0-41.796-2-61.902-5.78 41.846 130.59 163.29 225.66 307.144 228.34-112.543 88.22-254.351 140.81-408.371 140.81-26.528 0-52.746-1.58-78.484-4.68 145.547 93.33 318.361 147.81 504.07 147.81 604.821 0 935.601-501.07 935.601-935.604 0-14.266-.31-28.426-1-42.534 64.45-46.614 120.08-104.334 164.29-170.45z" fill="#fff" fill-rule="nonzero" transform="scale(.0128)"/></svg></a>
<a href="https://www.facebook.com/techonthenetcom" target="_blank" title="Follow us on Facebook"><svg width="32" height="32" focusable="false" role="img" aria-hidden="true" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><circle cx="16" cy="16" fill="#3c5a9a" r="15" stroke="#fff" stroke-width="1"/><path d="m1656.58 383.684h-277.04c-164.32 0-347.1 69.113-347.1 307.309.8 82.997 0 162.483 0 251.94h-190.101v302.507h195.981v870.87h360.13v-876.62h237.7l21.51-297.606h-265.41s.59-132.39 0-170.836c0-94.13 97.94-88.74 103.84-88.74 46.6 0 137.23.136 160.49 0z" fill="#fff" fill-rule="nonzero" transform="scale(.0128)"/></svg></a>
<a href="https://www.pinterest.com/techonthenetcom/" target="_blank" title="Follow us on Pinterest"><svg width="32" height="32" focusable="false" role="img" aria-hidden="true" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><ellipse cx="16" cy="16" rx="15" ry="15" style="fill-rule:evenodd;clip-rule:evenodd;fill:#ca2027;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5"/><path d="m14.7 5.1c-4.4.5-8.8 3.8-8.9 8.7-.1 3 1.1 5.2 4.1 5.8.3-1.4.4-2.2.4-2.2s-1.3-1.2-1.4-2c-1.2-6.4 7.6-10.8 12.2-6.3 3.2 3.1 1.1 12.6-4.1 11.6-4.9-.9 2.4-8.5-1.5-10-3.2-1.2-4.9 3.7-3.4 6.1-.9 4.2-2.8 8.1-2 13.4 2.5-1.7 3.4-5.1 4.1-8.5 1.3.7 1.9 1.5 3.5 1.6 5.9.4 9.3-5.6 8.4-11.3-.7-5-5.9-7.5-11.4-6.9z" fill="#fff"/></svg></a>
<a href="https://www.youtube.com/c/Techonthenetcom" target="_blank" title="Follow us on YouTube"><svg width="32" height="32" focusable="false" role="img" aria-hidden="true" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="m32 16c0 8.9-7.1 16-16 16s-16-7.1-16-16 7.2-16 16-16 16 7.2 16 16z" fill="#fff"/><path d="m16 32c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16m0-30.8c-8.1 0-14.8 6.7-14.8 14.8s6.6 14.8 14.8 14.8 14.8-6.6 14.8-14.8-6.7-14.8-14.8-14.8" fill="#ed2224"/><path d="m15.9 8.3s-6.9 0-8.6.4c-.9.2-1.7 1-1.9 1.9-.5 1.8-.5 5.4-.5 5.4s0 3.6.4 5.3c.2 1 1 1.7 1.9 2 1.8.5 8.6.5 8.6.5s6.9 0 8.6-.5c1-.2 1.7-1 2-2 .6-1.7.6-5.3.6-5.3s0-3.6-.5-5.3c-.2-.9-1-1.7-2-1.9-1.7-.5-8.6-.5-8.6-.5z" fill="#ed2224"/><path d="m13.2 11.6 7.5 4.4-7.5 4.4z" fill="#fff"/></svg></a>
</div>
<p>While using this site, you agree to have read and accepted our <a href="/terms_of_service.php">Terms of Service</a> and <a href="/privacy.php">Privacy Policy</a>.</p>
<p><a href="/copyright.php">Copyright</a> &copy; 2003-2023 TechOnTheNet.com. All rights reserved.</p>
</div>
<script>window.pbg={"ccpa":false,"gdpr":false,"ab":false,"af":[],"ap":0,"nr":{},"p":false,"s":{},"d":"techonthenet.com","w":"totn","l":{"728x90":"cb006f51","320x50":"cb006f51","160x600":"bc5adf5a","300x250":"effe787e"},"a":[{"t":"b","sc":["d"],"l":"top","s":"cb006f51","w":728,"h":90,"p":1,"b":{"a":{"p":{"placementId":14362705}},"as":{"a":"a","p":{"placementId":15847982}},"i":{"p":{"siteId":"315223","size":[728,90]}},"is":{"a":"i","p":{"siteId":"681742","size":[728,90]}},"m":{"p":{"cid":"8CU3027U6","crid":"568540533","bidfloor":0.5}},"r":{"p":{"accountId":24512,"siteId":421218,"zoneId":2389502,"floor":0.67000000000000004}},"rs":{"a":"r","p":{"accountId":24512,"siteId":421218,"zoneId":2400108,"floor":0.029999999999999999}},"st":{"p":{"pkey":"EMdZYtUCz8XLzuUshw3oCkTT","iframe":true,"bidfloor":1,"bcat":["IAB6-7","IAB7-2","IAB7-3","IAB7-5","IAB7-8","IAB7-9","IAB7-10","IAB7-11","IAB7-13","IAB7-14","IAB7-18","IAB7-19","IAB7-20","IAB7-21","IAB7-25","IAB7-27","IAB7-28","IAB7-29","IAB7-30","IAB7-31","IAB7-34","IAB7-37","IAB7-38","IAB7-39","IAB7-40","IAB7-41","IAB7-42","IAB7-43","IAB7-44","IAB7-45","IAB8-5","IAB8-18","IAB9-7","IAB9-9","IAB11","IAB14","IAB17-18","IAB18","IAB23","IAB24","IAB25","IAB26"]}},"s":{"p":{"tagid":"590797","bidfloor":"1.50"}},"ss":{"a":"s","p":{"tagid":"606598","bidfloor":1}}}},{"t":"b","sc":["m"],"l":"top","s":"cb006f51","w":320,"h":50,"p":1,"b":{"a":{"p":{"placementId":14362706}},"as":{"a":"a","p":{"placementId":15847983}},"i":{"p":{"siteId":"315229","size":[320,50]}},"is":{"a":"i","p":{"siteId":"681745","size":[320,50]}},"m":{"p":{"cid":"8CU3027U6","crid":"640876191","bidfloor":0.5}},"r":{"p":{"accountId":24512,"siteId":421218,"zoneId":2389504,"floor":0.67000000000000004}},"rs":{"a":"r","p":{"accountId":24512,"siteId":421218,"zoneId":2400110,"floor":0.029999999999999999}},"st":{"p":{"pkey":"ydQjXZDobbtpXREgboVyDzWG","iframe":true,"bidfloor":1,"bcat":["IAB6-7","IAB7-2","IAB7-3","IAB7-5","IAB7-8","IAB7-9","IAB7-10","IAB7-11","IAB7-13","IAB7-14","IAB7-18","IAB7-19","IAB7-20","IAB7-21","IAB7-25","IAB7-27","IAB7-28","IAB7-29","IAB7-30","IAB7-31","IAB7-34","IAB7-37","IAB7-38","IAB7-39","IAB7-40","IAB7-41","IAB7-42","IAB7-43","IAB7-44","IAB7-45","IAB8-5","IAB8-18","IAB9-7","IAB9-9","IAB11","IAB14","IAB17-18","IAB18","IAB23","IAB24","IAB25","IAB26"]}},"s":{"p":{"tagid":"590798","bidfloor":"1.50"}},"ss":{"a":"s","p":{"tagid":"606597","bidfloor":1}}}},{"t":"b","sc":["d"],"l":"left","s":"bc5adf5a","w":160,"h":600,"p":0,"b":{"a":{"p":{"placementId":14362708}},"as":{"a":"a","p":{"placementId":15847984}},"i":{"p":{"siteId":"315228","size":[160,600]}},"is":{"a":"i","p":{"siteId":"681744","size":[160,600]}},"m":{"p":{"cid":"8CU3027U6","crid":"379769517","bidfloor":0.5}},"r":{"p":{"accountId":24512,"siteId":421218,"zoneId":2389506,"floor":0.67000000000000004}},"rs":{"a":"r","p":{"accountId":24512,"siteId":421218,"zoneId":2400112,"floor":0.029999999999999999}},"st":{"p":{"pkey":"f3YUGYWuA3fgeFbwmhWMC9gq","iframe":true,"bidfloor":1,"bcat":["IAB6-7","IAB7-2","IAB7-3","IAB7-5","IAB7-8","IAB7-9","IAB7-10","IAB7-11","IAB7-13","IAB7-14","IAB7-18","IAB7-19","IAB7-20","IAB7-21","IAB7-25","IAB7-27","IAB7-28","IAB7-29","IAB7-30","IAB7-31","IAB7-34","IAB7-37","IAB7-38","IAB7-39","IAB7-40","IAB7-41","IAB7-42","IAB7-43","IAB7-44","IAB7-45","IAB8-5","IAB8-18","IAB9-7","IAB9-9","IAB11","IAB14","IAB17-18","IAB18","IAB23","IAB24","IAB25","IAB26"]}},"s":{"p":{"tagid":"590799","bidfloor":"1.50"}},"ss":{"a":"s","p":{"tagid":"606595","bidfloor":1}}}},{"t":"b","sc":["m","d"],"l":"bottom","s":"effe787e","w":300,"h":250,"p":0,"b":{"a":{"p":{"placementId":14362709}},"as":{"a":"a","p":{"placementId":15847985}},"i":{"p":{"siteId":"315226","size":[300,250]}},"is":{"a":"i","p":{"siteId":"681743","size":[300,250]}},"m":{"p":{"cid":"8CU3027U6","crid":"859518216","bidfloor":0.5}},"r":{"p":{"accountId":24512,"siteId":421218,"zoneId":2389508,"floor":0.67000000000000004}},"rs":{"a":"r","p":{"accountId":24512,"siteId":421218,"zoneId":2400114,"floor":0.029999999999999999}},"st":{"p":{"pkey":"uhHAPiEPWJsLQskDAscmPnFD","iframe":true,"bidfloor":1,"bcat":["IAB6-7","IAB7-2","IAB7-3","IAB7-5","IAB7-8","IAB7-9","IAB7-10","IAB7-11","IAB7-13","IAB7-14","IAB7-18","IAB7-19","IAB7-20","IAB7-21","IAB7-25","IAB7-27","IAB7-28","IAB7-29","IAB7-30","IAB7-31","IAB7-34","IAB7-37","IAB7-38","IAB7-39","IAB7-40","IAB7-41","IAB7-42","IAB7-43","IAB7-44","IAB7-45","IAB8-5","IAB8-18","IAB9-7","IAB9-9","IAB11","IAB14","IAB17-18","IAB18","IAB23","IAB24","IAB25","IAB26"]}},"s":{"p":{"tagid":"590800","bidfloor":"1.50"}},"ss":{"a":"s","p":{"tagid":"606596","bidfloor":1}}}}],"n":{"a":"appnexus","as":"appnexuss2s","i":"ix","is":"ixs2s","m":"medianet","r":"rubicon","rs":"rubicons2s","st":"sharethrough","s":"sovrn","ss":"sovrns2s"},"f":{"a":0.7,"as":0.7,"i":0.7,"is":0.7,"m":0.7,"r":0.7,"rs":0.7,"st":0.7,"s":0.7,"ss":0.7},"vf":{"a":1,"as":0,"i":0,"is":0,"m":0,"r":0,"rs":0,"st":1,"s":0,"ss":0},"spf":0.05,"sid":"c33b4ebc","tf":["techonthenet\/ros","techonthenetcommobile\/mobile"]};var pbjs=pbjs||{};function rot(e){return e.replace(/[a-z]/gi,(function(e){return String.fromCharCode(e.charCodeAt(0)+(e.toLowerCase()<"n"?13:-13))}))}function h2a(e){return decodeURIComponent(rot(e.toString()))}function a2h(e){return encodeURIComponent(rot(e.toString()))}function sendLog(e,t){var n=window.XMLHttpRequest?new XMLHttpRequest:new ActiveXObject("Microsoft.XMLHTTP");n.open("POST","/"+e),n.setRequestHeader("X-Requested-With","XMLHttpRequest"),n.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),n.send("data="+a2h(JSON.stringify(t)))}function callANRenderer(e,t){var n="d"===window.clientsize?[500,375]:[320,240];const r={ad:{video:{content:t,player_width:n[0],player_height:n[1]}}};e.renderer.push((()=>{window.ANOutstreamVideo.renderAd({targetId:e.adUnitCode,adResponse:r,rendererOptions:{adText:"Advertisements",skippable:{enabled:!0,videoThreshold:5}}})}))}function render(e){let t=e.ad||e.vastXml;t&&callANRenderer(e,t)}pbjs.que=pbjs.que||[],function(e,t){function n(){e.placeAdsHandler(!1,null,0,0)}for(var r in e.setCookie=function(e,n,r){var i=new Date;i.setTime(i.getTime()+36e5*r),t.cookie=e+"="+n+";expires="+i.toUTCString()+";path=/;SameSite=Lax;Secure"},e.getCookie=function(e){return decodeURIComponent(t.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*"+encodeURIComponent(e).replace(/[\-\.\+\*]/g,"\\$&")+"\\s*\\=\\s*([^;]*).*$)|^.*$"),"$1"))||null},e.hideConsent=function(){e.setCookie("consent","1",87600);var n=t.getElementById("consent");null!==n&&(n.className="hidden"),e.pbg.cd=!1},e.showConsent=function(){var n=t.getElementById("consent");if(null!==n)n.className=" ";else{var r=t.createElement("div");r.id="consent",r.innerHTML=h2a("Jr%20hfr%20pbbxvrf%20gb%20rafher%20lbh%20trg%20gur%20orfg%20rkcrevrapr%20ba%20bhe%20jrofvgr.%20%3Pn%20uers%3Q%22%2Scevinpl.cuc%22%3RYrnea%20zber%3P%2Sn%3R%3Pohggba%20vq%3Q%22pbafrag_oga%22%20pynff%3Q%22oga%22%3RTbg%20vg!%3P%2Sohggba%3R"),t.body.appendChild(r),e.pbg.cd=!0}var i=t.getElementById("consent_btn");null!==i&&(i.onclick=e.hideConsent)},e.abDismiss=function(){e.setCookie("sabl","1",4);var n=t.getElementById(e.pbg.sid);return null!==n&&(n.className="hidden"),!0},e.testAds=function(){if(null===t.getElementById(e.pbg.sid)){for(var n=!0,r=0,i=e.pbg.af,a=i.length,s=0;s<a;s++){var o=i[s];if("v"===o.t)r++;else{var d=t.getElementById(o.s+"_frm");if(null!==d){r++;try{var p=d.contentDocument||d.contentWindow.document;if(null!==p&&null!==p.body){p.body.clientHeight>0&&(n=!1);for(var c=p.body.firstChild;null!==c&&!0===n;c=c.nextSibling)1===c.nodeType&&"SCRIPT"!==c.nodeName&&(n=!1)}}catch(t){e.console.log(t)}}}}if(n&&e.pbg.ap===r&&(e.pbg.ab=!0,!e.pbg.cd&&null===e.getCookie("sabl"))){var b=t.createElement("div");b.id=e.pbg.sid,b.innerHTML=h2a("%3Pohggba%20glcr%3Q%22ohggba%22%20bapyvpx%3Q%22jvaqbj.noQvfzvff()%3O%22%3R%P3%97%3P%2Sohggba%3R%3Pvzt%20fep%3Q%22%2Svzntrf%2Sgevnatyr_jneavat.cat%22%20nyg%3Q%22jneavat%20gevnatyr%22%20jvqgu%3Q%2248%22%20urvtug%3Q%2248%22%3R%3Pc%3RBbcf%2P%20fbzrguvat%20vf%20ceriragvat%20guvf%20jro%20cntr%20sebz%20ybnqvat%20cebcreyl.%20Sbe%20gur%20orfg%20rkcrevrapr%2P%20cyrnfr%20pbafvqre%20qvfnoyvat%20nal%20pbagrag%20oybpxref%20lbh%20znl%20unir%20npgvir%20va%20lbhe%20jro%20oebjfre.%3P%2Sc%3R%3Pc%3RCyrnfr%20pyvpx%20%3Pn%20uers%3Q%22%2Snobhg_hf.cuc%22%3Rurer%3P%2Sn%3R%20gb%20yrnea%20zber%20nobhg%20hf%20naq%20bhe%20cbyvpvrf.%3P%2Sc%3R%3P%2Sqvi%3R"),t.body.appendChild(b)}}},e.placeAdsHandler=function(n,r,i,a){if(n||!(e.pbg.ap>0)){for(var s=[],o=e.pbg.af,d=o.length,p=0;p<d;p++){var c=o[p],b=!0;if(n&&(b=c.h===a&&c.w===i),b){var l=n?r:t.getElementById(c.s+"_slot");if(null!==l){var g=t.createElement("iframe");n||g.setAttribute("id",c.s+"_frm"),g.setAttribute("src","about:blank"),g.setAttribute("width",c.w),g.setAttribute("height",c.h),g.setAttribute("frameborder","0"),g.setAttribute("marginWidth","0"),g.setAttribute("marginHeight","0"),g.setAttribute("scrolling","no"),n||e.pbg.ap++;var u=null;"b"===c.t&&(l.appendChild(g),u=g.contentDocument||g.contentWindow.document);var h=!0;if(!e.oldie&&"function"==typeof pbjs.getAdserverTargetingForAdUnitCode){var f=pbjs.getAdserverTargetingForAdUnitCode(c.s+"_slot");if(f&&f.hb_pb&&f.hb_bidder&&f.hb_adid){var v=parseFloat(f.hb_pb);isNaN(v)&&(v=0);var m=n?e.pbg.spf||.01:e.pbg.f[e.pbg.nr[f.hb_bidder]];if("v"===c.t&&(m=e.pbg.vf[e.pbg.nr[f.hb_bidder]]),v>=m){switch(c.t){case"b":null!==u&&(u.write("<!DOCTYPE html>\n"),pbjs.renderAd(u,f.hb_adid)),g.setAttribute("width",c.w),g.setAttribute("height",c.h);break;case"v":pbjs.renderAd(t,f.hb_adid)}e.pbg.s[c.w+"x"+c.h]="hb",s.push([f.hb_bidder,f.hb_size,f.hb_pb,f.hb_adomain]),h=!1}}}if(h&&"b"===c.t)if(n)g.setAttribute("src","/defaults/prebidw"+c.w+"h"+c.h+".php");else if(e.pbg.tf){var w="m"===e.clientsize?e.pbg.tf[1]:e.pbg.tf[0];u.write('<!DOCTYPE html>\n<html lang="en">\n<head>\n<meta name="robots" content="noindex,nofollow">\n<title>TribalFusion '+c.w+"x"+c.h+'</title>\n<script>var inDapIF = true;<\/script>\n</head>\n<body onload="window.top.testAds();">\n<script type="text/javascript">if (window.top.pbg && window.top.pbg.s) window.top.pbg.s["'+c.w+"x"+c.h+'"]="tf";<\/script>\n<script type="text/javascript">\x3c!--\ne9 = new Object();\ne9.size = "'+c.w+"x"+c.h+'";\ndocument.write(\'<script type="text/javascript" src="https://tags.expo9.exponential.com/tags/'+w+"/tags.js\"></scr' + 'ipt>');\n//--\x3e<\/script>\n</body>\n</html>")}else g.setAttribute("src","/defaults/primaryw"+c.w+"h"+c.h+".php");null!==u&&u.close()}}}s.length>0&&sendLog("nsc",s)}},e.clientsize=(e.innerWidth||t.documentElement.clientWidth||t.body.clientWidth)<768?"m":"d",e.pbg.n)e.pbg.nr[e.pbg.n[r]]=r;for(var i=e.pbg.a.length,a=0;a<i;a++)for(var s=e.pbg.a[a],o=s.sc.length;o--;)e.clientsize===s.sc[o]&&null!==t.getElementById(s.s+"_slot")&&e.pbg.af.push(s);var d=t.body;if(null!==d&&(-1!==(" "+d.className+" ").indexOf(" eu ")?e.pbg.gdpr=!0:-1!==(" "+d.className+" ").indexOf(" us ")&&(e.pbg.ccpa=!0),(e.pbg.gdpr||e.pbg.ccpa)&&null===e.getCookie("consent")&&e.showConsent()),e.oldie)n();else{for(var p=[],c={},b=e.pbg.af,l=e.pbg.n,g=b.length,u=0;u<g;u++){var h=b[u],f=[];for(var v in h.b)f.push({bidder:l[v],params:h.b[v].p}),h.b[v].a&&(c[l[v]]=l[h.b[v].a]);var m={code:h.s+"_slot",ortb2Imp:{ext:{gpid:e.pbg.w+"_"+h.l,data:{pbadslot:e.pbg.w+"_"+h.l}}},bids:f,mediaTypes:{}};switch(h.t){case"b":m.mediaTypes.banner={sizes:[[h.w,h.h]],pos:h.p};break;case"v":m.mediaTypes.video={context:"outstream",playerSize:[h.w,h.h],mimes:["video/mp4"],protocols:[1,2,3,4,5,6,7,8],playbackmethod:[2],skip:1,pos:h.p,placement:3,renderer:{render:render,url:"https://acdn.adnxs.com/video/outstream/ANOutstreamVideo.js"}}}p.push(m)}var w=null!==e.getCookie("ccpa_opt_out"),y={priceGranularity:{buckets:[{precision:2,min:0,max:1e3,increment:.01}]},consentManagement:{gdpr:{cmpApi:"static",consentData:{getTCData:{gdprApplies:e.pbg.gdpr,tcString:""}}},usp:{cmpApi:"static",consentData:{getUSPData:{uspString:e.pbg.ccpa?"1Y"+(w?"Y":"N")+"N":"1---"}}}},targetingControls:{allowTargetingKeys:["BIDDER","AD_ID","PRICE_BUCKET","SIZE","DEAL","SOURCE","FORMAT","UUID","CACHE_ID","CACHE_HOST","ADOMAIN"]}};e.pbg.gdpr||w||(y.userSync={iframeEnabled:!0,filterSettings:{iframe:{bidders:["ix","appnexus","sovrn","medianet"],filter:"include"}},userIds:[{name:"criteo"},{name:"sharedId",storage:{name:"_pubcid",type:"cookie",expires:365}}]}),pbjs.bidderSettings={standard:{storageAllowed:!0,allowAlternateBidderCodes:!0}},pbjs.que.push((function(){for(var e in c)pbjs.aliasBidder(c[e],e)})),pbjs.que.push((function(){pbjs.setConfig(y),pbjs.addAdUnits(p),pbjs.requestBids({bidsBackHandler:n,timeout:2500})})),setTimeout((function(){n()}),3e3)}e.addEventListener("blur",(function(n){var r=t.activeElement;if("IFRAME"===r.tagName&&/^\w+_frm/.test(r.id)){var i="click";n.isTrusted||(n.preventDefault(),n.stopPropagation(),i="clickbot"),sendLog("cel",[{type:i,source:e.pbg.s,ifid:r.id,size:r.width+"x"+r.height}])}}))}(this,this.document);</script>
<script async src="/javascript/techonthenet-min.js?v=20230228"></script>
</body>
<!-- InstanceEnd --></html>