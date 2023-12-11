<?php
/* Smarty version 4.1.1, created on 2023-08-08 01:57:25
  from '/home/j2023d/public_html/Smarty/templates/create_list.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_64d1227556c487_23712453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79b60183892580ce87a359e95cc044a64e46abdb' => 
    array (
      0 => '/home/j2023d/public_html/Smarty/templates/create_list.tmpl',
      1 => 1691427436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./headerAnker.tmpl' => 1,
    'file:./genre_dropdown.tmpl' => 1,
    'file:./target_dropdown.tmpl' => 1,
  ),
),false)) {
function content_64d1227556c487_23712453 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/bungo_tabicon.png">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/header.css" rel="stylesheet">
    <title>リスト作成</title>
    
        <style>
            :root {
                --regi_num_f_size: 1.3vw;
                --regi_h3_f_size: 1.5vw;
                --regi_h5_f_size: 1vw;
                --regi_intro_f_size: 1vw;

                --search_input_f_size: 1.1vw;
                --search_hit_f_size: 1.2vw;
                --search_info_f_size_h3: 1.4vw;
                --search_info_f_size_h5: 1.3vw;
                --search_info_f_size_btn: 1.3vw;
            }

            @media (max-width: 800px) {
                :root {
                    --regi_num_f_size: 2vw;
                    --regi_h3_f_size: 2.5vw;
                    --regi_h5_f_size: 2vw;
                    --regi_intro_f_size: 2vw;

                    --search_input_f_size: 2vw;
                    --search_hit_f_size: 3vw;
                    --search_info_f_size_h3: 4vw;
                    --search_info_f_size_h5: 3.5vw;
                    --search_info_f_size_btn: 4vw;
                }
            }

            body {
                margin: 0;
                height: 100vh;
                display: flex;
                flex-direction: column;
                overflow: hidden;
            }

            main {
                flex-grow: 1;
                display: flex;
                padding: 0 1% 1%;
                position: relative;

            }

            .main_scroll {
                height: 75vh;
                padding-top: 1%;
                overflow-y: scroll;
                padding-right: 2vw;
            }

            #register,
            #search_book {
                height: 98%;
                margin-top: 2%;
                display: flex;
                flex-direction: column;
            }


            /*ここから登録====================================================================================================*/


            form {
                width: 60%;
                height: 100%;
            }

            #register_topbar {
                flex-grow: 1;
                display: flex;
                align-items: center;
                padding-right: 1%;
            }

            #register_topbar>span {
                width: 7%;
                aspect-ratio: 1 / 1;
                display: block;
                border-radius: 50%;
                background-size: cover;
                background-position: center;
                margin-right: 3%;
            }

            #register_topbar>input {
                width: 75%;
                margin-right: 5%;

            }

            #open_search {
                display: none;
                width: 13%;
                font-size: 2.2vw;
                text-align: center;
            }

            #register_list {
                padding-left: 1%;
            }

            #register_list>button {
                margin: auto;
            }

            .regi_dropdown {
                display: flex;
            }

            .regi_dropdown>p {
                margin-block: auto;
            }

            .regi_dropdown>.btn-group {
                margin-left: auto;
            }

            .regi_dropdown>.btn-group>button {
                border: solid 1px darkgray;
                border-radius: 1rem;
            }

            .regi_dropdown>.btn-group>button.show {
                box-shadow: none;
                background-color: gainsboro;
            }

            .regi_dropdown>.btn-group>button:hover {
                background-color: gainsboro;

            }



            #register_books {
                margin-block: 5%;
                border-top: dashed 1px black;
            }

            #register_books>* {
                padding-block: 1%;
                border-bottom: dashed 1px black;
                aspect-ratio: 5 / 1;
                display: flex;
            }

            .reg_num {
                margin-block: auto;
                width: 5%;
                text-align: center;
                font-size: var(--regi_num_f_size);
            }

            .book_img {
                width: 20%;
                display: flex;
                overflow: hidden;
            }

            .book_img>img {
                height: 80%;
                width: auto;
                margin: auto;
            }

            .book_info {
                width: 32%;
                height: 100%;
                justify-content: center;
                padding-inline: 1%;
                margin-block: auto;
                display: flex;
                flex-direction: column;
            }

            .book_info>h3 {
                width: 100%;
                max-height: 75%;
                margin-bottom: 2%;
                font-size: var(--regi_h3_f_size);
                word-break: break-all;
                text-overflow: ellipsis;
                overflow: hidden;
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
            }

            .book_info>h5 {
                color: dimgray;
                margin: 0;
                font-size: var(--regi_h5_f_size);
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;

            }

            .book_introduction {
                width: 33%;
                margin-inline: 1%;
                font-size: var(--regi_intro_f_size);
                overflow-y: scroll;
                resize: none;
            }

            .book_rep {
                width: 4%;
                margin-right: 1%;
            }

            .book_rep>button {
                width: 100%;
                font-size: 1.5vw;
                border: solid 0.1vw gray;
                height: 50%;
                transition: all 0.3s ease;
                box-shadow: 0.3vw 0.3vw 0.3vw gray;
                padding: 0;

            }

            .book_rep>button:first-child {
                border-radius: 2vh 2vh 0 0;

            }

            .book_rep>button:last-child {
                border-radius: 0 0 2vh 2vh;

            }

            .book_rep>button:hover {
                background-color: gainsboro;

            }

            .book_delete {
                width: 3%;
                display: block;
                margin-bottom: auto;
            }

            .book_delete>img {
                width: 100%;
                height: auto;
            }

            .book_delete>img:hover {
                filter: opacity(80%);
            }


            #save_button {
                display: flex;
                padding-bottom: 3%;
            }

            #save_button>button {
                padding-inline: 3%;
                margin: auto;
            }


            /*ここから検索=======================================================================================================*/

            #s_drop_btn,
            #search_keyword,
            #s_btn {
                font-size: var(--search_input_f_size);
            }

            #search_book {
                width: 40%;
                padding-left: 1%;
                background-color: white;
            }

            #search_box {
                flex-grow: 1;
                display: flex;
                align-items: center;
            }

            #search_box>* {
                width: 80%;
            }

            #return_regi {
                display: none;
                width: 10%;
                font-size: 2.2vw;
            }

            #search {
                display: flex;
                flex-direction: column;
            }

            #pager {
                margin-inline: auto;
                margin-block: 10px;
            }

            #search_result {
                flex-grow: 1;
            }

            #search_result>p {
                padding-left: 1%;
                font-size: var(--search_hit_f_size);
            }

            #search_result>div {
                padding: 1%;
                aspect-ratio: 3 / 1;
                position: relative;
                z-index: 1;
            }

            #search_result>div>div {
                background-color: white;
                border: solid 0.1rem gainsboro;
                border-radius: 1rem;
                padding: 1%;
                width: 100%;
                height: 100%;
                display: flex;
            }

            #search_result>div>span {
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: -1;
                position: absolute;
            }

            .search_img {
                width: 35%;
                overflow: hidden;
                display: flex;
            }

            .search_img>img {
                height: 90%;
                width: auto;
                margin: auto;
            }

            .search_info {
                width: 65%;
                padding: 1%;
                display: flex;
                flex-direction: column;
                position: relative;
            }

            .search_info>h3 {
                width: 100%;
                font-size: var(--search_info_f_size_h3);
                margin-bottom: 2%;
                max-height: 70%;
                word-break: break-all;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;

            }

            .search_info>h5 {
                margin: 0;
                font-size: var(--search_info_f_size_h5);
                color: dimgray;
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;

            }

            .search_info>button {
                position: absolute;
                bottom: 1%;
                right: 1%;
                height: 22%;
                font-size: var(--search_info_f_size_btn);
                padding: 0 1rem;
            }

            @keyframes leftTransAnimation {
                100% {
                    transform: translateX(-100%);
                }
            }

            .lTAnim {
                animation-name: leftTransAnimation;
                animation-duration: 0.5s;
                animation-delay: 0s;
                animation-play-state: running;
            }

            @keyframes rTolTransAnimation {
                0% {
                    transform: translateX(100%);
                }

                100% {
                    transform: translateX(0%);
                }
            }

            .rTolTAnim {
                animation-name: rTolTransAnimation;
                animation-duration: 0.5s;
                animation-delay: 0s;
                animation-play-state: running;
            }

            @keyframes replaceUp {
                0% {
                    transform: translateY(100%);
                }

                100% {
                    transform: translateY(0%);
                }
            }

            .repUp {
                animation-name: replaceUp;
                animation-duration: 0.5s;
                animation-delay: 0s;
                animation-play-state: running;
            }


            @keyframes replaceDown {
                0% {
                    transform: translateY(-100%);
                }

                100% {
                    transform: translateY(0%);
                }
            }

            .repDown {
                animation-name: replaceDown;
                animation-duration: 0.5s;
                animation-delay: 0s;
                animation-play-state: running;
            }

            .sb_hidden {
                width: 100% !important;
                display: none !important;
                z-index: 1;
                position: absolute;
                top: 0;
                right: 0;
            }

            .sb_hidden_reg {
                width: 100% !important;
            }


            .sb_show_flex {
                display: flex !important;
            }

            .sb_show_block {
                display: block !important;
            }
        </style>
    
</head>

<body>
    <nav class="navbar navbar-expand-sm" id="nav_min_style">
        <a href="index.php" class="navbar-brand"><img src="./img/logo1.png" id="site_logo" /></a>
        <form id="nav_input" action="search_list.php" method="get">
            <div>
                <input type="search" placeholder="キーワードを入力" aria-label="Search" name="w"
                    value="<?php if ((isset($_smarty_tpl->tpl_vars['keyword']->value))) {
echo $_smarty_tpl->tpl_vars['keyword']->value;
}?>" pattern=".*\S+.*" title="一文字以上入力してください。" required>
                <button type="submit">検索</button>
            </div>
        </form>
        <?php $_smarty_tpl->_subTemplateRender("file:./headerAnker.tmpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </nav>
    <main>
        <form action="create_list.php?subid=<?php echo $_smarty_tpl->tpl_vars['subid']->value;?>
" method="post" name="registForm">
            <div id="register">
                <div id="register_topbar">
                    <span
                        style="background-image: url('<?php if ($_smarty_tpl->tpl_vars['user_icon']->value === null) {?>./img/default_icon.png<?php } else {
echo $_smarty_tpl->tpl_vars['FILEUP_DIR']->value;
echo $_smarty_tpl->tpl_vars['user_icon']->value;
}?>');"></span>
                    <input type="text" class="form-control" placeholder="このリストのタイトルを入力してください" name="title"
                        maxlength="50">
                    <button type="button" class="btn btn-primary" id="open_search" onclick="open_book_search()">本検索
                    </button>
                </div>
                <div id="register_list" class="main_scroll">
                    <div class="pt-4 regi_dropdown">
                        <p>ジャンルを選択してください</p>
                        <?php $_smarty_tpl->_subTemplateRender("file:./genre_dropdown.tmpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                    <div class="pt-4 regi_dropdown">
                        <p>ターゲットを選択してください</p>
                        <?php $_smarty_tpl->_subTemplateRender("file:./target_dropdown.tmpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                    <textarea class="form-control my-5" rows="6" style="resize: none;" placeholder="このリストの紹介文を入力してください"
                        name="comment" maxlength="200"></textarea>
                    <div id="register_books">
                    </div>
                    <div class="text-danger"><?php echo $_smarty_tpl->tpl_vars['errortext']->value;?>
</div>
                    <div id="save_button">
                        <button type="button" class="btn btn-primary btn-lg" onclick="submitProcess()">保存</button>
                    </div>
                </div>
            </div>
            <input type="hidden" name="submit_id" value="<?php echo $_smarty_tpl->tpl_vars['subid']->value;?>
">
        </form>
        <div id="search_book">
            <div id="search_box">
                <button type="button" class="btn btn-primary" id="return_regi" onclick="back_regi()">戻る</button>
                <div class="mx-auto input-group">
                    <input type="search" class="form-control" placeholder="書籍キーワードを入力" id="search_keyword">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false" id="s_drop_btn">タイトル</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item active" href="javascript:void(0)" id="sd_0"
                                onclick="sDropClick(0)">タイトル</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)" id="sd_1" onclick="sDropClick(1)">著者</a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0)" id="sd_2"
                                onclick="sDropClick(2)">ISBN</a></li>
                    </ul>
                    <button class="btn btn-outline-success bg-success text-white" type="button"
                        onclick="bookSearchClick()" id="s_btn">&emsp;検索&emsp;</button>
                </div>
            </div>
            <div id="search" class="main_scroll">
                <div id="search_result">

                </div>
                <nav id="pager">
                    <ul class="pagination">
                        <li class="page-item" id="page_0" style="display: none;">
                            <a class="page-link" href="javascript:void(0)" onclick="searchPageListener(0)">1 ..</a>
                        </li>
                        <li class="page-item" id="page_1" style="display: none;"><a class="page-link"
                                href="javascript:void(0)" onclick="searchPageListener(1)">1</a></li>
                        <li class="page-item" id="page_2" style="display: none;"><a class="page-link"
                                href="javascript:void(0)" onclick="searchPageListener(2)">2</a></li>
                        <li class="page-item" id="page_3" style="display: none;"><a class="page-link"
                                href="javascript:void(0)" onclick="searchPageListener(3)">3</a></li>
                        <li class="page-item" id="page_4" style="display: none;">
                            <a class="page-link" href="javascript:void(0)" onclick="searchPageListener(4)">..
                                <span><span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>
    <?php echo '<script'; ?>
 src="./js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    
        <?php echo '<script'; ?>
>
            const search_keyword = document.getElementById('search_keyword');
            search_keyword.onkeydown = function(event) {
                if (event.key === 'Enter') {
                    bookSearchClick();
                }
            }
            const regiOrder = [];
            const regiList = [];
            let keyword = '';
            let sDorp = 0;
            let sDorpActive = 0;

            let sGenre = -1;

            function selectGenre(i) {
                if (i != sGenre) {
                    let ctgy = document.getElementById('gl_' + i);
                    ctgy.classList.add('active');
                    document.getElementById("g_btn").innerText = ctgy.innerText;
                    if (sGenre != -1) {
                        document.getElementById('gl_' + sGenre).classList.remove('active');
                    }
                    sGenre = i;
                }
            }

            let sTarget = 1;

            function selectTarget(i) {
                if (i != sTarget) {
                    let tgt = document.getElementById('tl_' + i);
                    tgt.classList.add('active');
                    document.getElementById("t_btn").innerText = tgt.innerText;
                    document.getElementById('tl_' + sTarget).classList.remove('active');
                    sTarget = i;
                }
            }

            function bookSearchClick() {
                if (!search_keyword.value.match('[^ 　]+')) {
                    return;
                }
                sDorp = sDorpActive;
                keyword = search_keyword.value;
                if (sDorp == 2) {
                    keyword = keyword.replaceAll('-', '').replaceAll(' ', '').replaceAll('　', '');
                    if(!keyword.match('^([0-9]{9}[0-9X]{1}|[0-9]{12}[0-9X]{1})$')) {
                    alert('ISBNの形式が正しくありません。\nスペースを含めず、すべて半角英数字で入力してください。');
                    return;
                }
            }
            bookSearch(1);
            }

            function sDropClick(i) {
                switch (i) {
                    case 0:
                    case 1:
                    case 2:
                        if (i != sDorpActive) {
                            document.getElementById('sd_' + i).classList.add('active');
                            document.getElementById('s_drop_btn').innerText = sDorpText(i);
                            document.getElementById('sd_' + sDorpActive).classList.remove('active');
                            sDorpActive = i;
                        }
                        default:
                            return;
                            break;
                }
            }

            function sDorpText(i) {
                switch (i) {
                    case 0:
                        return 'タイトル';
                    case 1:
                        return '著者';
                    case 2:
                        return 'ISBN';
                    default:
                        break;
                }
                return null;
            }

            async function bookSearch(page) {
                let jsonObj = null;
                let promise = new Promise(function(end) {
                    const xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4) {
                            let success = xmlhttp.status == 200;
                            if (success) {
                                try {
                                    jsonObj = JSON.parse(xmlhttp.responseText);
                                } catch (e) {
                                    success = false;
                                }
                            }
                            if (!success) {
                                alert('検索に失敗しました。\n時間をおいて再度実行してください。');
                            }
                            end();
                        }
                    }
                    xmlhttp.open("GET", "./booksearch.php?" + new URLSearchParams({k:encodeURIComponent(keyword),page:page,sf:sDorp}).toString());
                    xmlhttp.send();
                });
                await promise;
                const search_div = document.getElementById('search_result');
                const new_search_div = search_div.cloneNode(false);
                const search_div_parent = document.getElementById('search');
                search_div.remove();
                search_div_parent.prepend(new_search_div);
                if (jsonObj == null) {
                    return;
                }
                let hitNum = document.createElement('p');
                const searchFlagtext = sDorpText(sDorp);
                hitNum.innerText = keyword + 'と' + searchFlagtext + '検索\n' + jsonObj.count + '件ヒットしました';
                initPager(jsonObj.count, page, jsonObj.limit);
                new_search_div.appendChild(hitNum);
                let i = 0;
                jsonObj.books.forEach(book => {
                    new_search_div.appendChild(create_search_book(book.id, i, book.title, book.authors, book.link));
                    ++i;
                });
                search_div_parent.scrollTop = 0;
            }

            function initPager(count, m_page, limit) {
                let pagemax = Math.floor(count / limit);
                if (count % limit != 0) {
                    ++pagemax;
                }

                let maxflag = false;
                let minflag = false;
                if (m_page == 1) {
                    for (let id = 1; id <= 3; ++id) {
                        const page = document.getElementById('page_' + id);
                        if (id <= pagemax) {
                            page.querySelector('a').innerText = id;
                            page.style.display = 'inline';
                        } else {
                            page.style.display = 'none';
                        }
                        if (id == 1) {
                            page.classList.add('active');
                        } else {
                            page.classList.remove('active');
                        }
                    }
                    maxflag = 3 < pagemax;
                } else if (m_page == pagemax) {
                    for (let id = 3, pageNum = m_page; id > 0; --id, --pageNum) {
                        const page = document.getElementById('page_' + id);
                        if (pageNum > 0) {
                            page.querySelector('a').innerText = pageNum;
                            page.style.display = 'inline';
                        } else {
                            page.style.display = 'none';
                        }
                        if (id == 3) {
                            page.classList.add('active');
                        } else {
                            page.classList.remove('active');
                        }
                    }
                    minflag = m_page > 3;
                } else {
                    const page1 = document.getElementById('page_1');
                    page1.querySelector('a').innerText = m_page - 1;
                    page1.style.display = 'inline';
                    page1.classList.remove('active');
                    const page2 = document.getElementById('page_2');
                    page2.querySelector('a').innerText = m_page;
                    page2.style.display = 'inline';
                    page2.classList.add('active');
                    const page3 = document.getElementById('page_3');
                    page3.querySelector('a').innerText = m_page + 1;
                    page3.style.display = 'inline';
                    page3.classList.remove('active');
                    maxflag = m_page + 1 < pagemax;
                    minflag = m_page - 1 > 1;
                }

                const page4 = document.getElementById('page_4');
                document.getElementById('page_0').style.display = minflag ? 'inline' : 'none';
                if (maxflag) {
                    page4.style.display = 'inline';
                    page4.querySelector('span').innerText = pagemax;
                } else {
                    page4.style.display = 'none';
                }
            }

            function searchPageListener(i) {
                switch (i) {
                    case 0:
                        bookSearch(1);
                        break;
                    case 1:
                    case 2:
                    case 3:
                        bookSearch(Number(document.getElementById('page_' + i).querySelector('a').innerText));
                        break;
                    case 4:
                        bookSearch(Number(document.getElementById('page_4').querySelector('span').innerText));
                        break;
                    default:
                        return;
                        break;
                }
            }

            function create_search_book(id, i, title, authors, link) {
                let searchImg = document.createElement('div');
                searchImg.classList.add('search_img');
                let img = document.createElement('img');
                img.src = link;
                searchImg.appendChild(img);

                let infoDiv = document.createElement('div');
                infoDiv.classList.add('search_info');

                let h3 = document.createElement('h3');
                h3.innerText = title;
                let h5 = document.createElement('h5');
                h5.innerText = authors;
                let button = document.createElement('button');
                button.classList.add('btn', 'btn-primary');
                button.type = ' button';
                button.innerText = '登録';
                button.addEventListener('click', bookRegisterListener(id, i));
                let inputId = document.createElement('input');
                inputId.type = 'hidden';
                inputId.value = id;
                infoDiv.append(h3, h5, button, inputId)

                let div = document.createElement('div');
                div.id = 'search_' + i;
                div.append(searchImg, infoDiv);

                let reg = document.createElement('span');
                reg.innerText = '登録しました';

                let parent = document.createElement('div');
                parent.append(div, reg);

                return parent;
            }

            let regiCount = 0;

            function bookRegisterListener(id, i) {
                return function(e) {
                    if (regiList.length >= 10) {
                        alert('登録できる本は、最大10件です。');
                        return;
                    } else if (regiList.includes(id)) {
                        alert('この本はすでに登録されています。');
                        return;
                    }
                    regiList.push(id);
                    regiOrder.push(regiCount);

                    let div = document.getElementById('search_' + i);
                    let anim = () => {
                        div.classList.remove('lTAnim');
                        div.id = 'regi_' + regiCount;

                        div.querySelector('.search_img').classList.replace('search_img', 'book_img');

                        let info = div.querySelector('.search_info');
                        info.classList.replace('search_info', 'book_info');
                        info.querySelector('button').remove();

                        let numDiv = document.createElement('div');
                        numDiv.classList.add('reg_num');
                        numDiv.innerText = regiOrder.length;

                        let textarea = document.createElement('textarea');
                        textarea.classList.add('form-control', 'book_introduction');
                        textarea.placeholder = "この本の紹介文を入力してください";
                        textarea.setAttribute('maxlength', '200');

                        let repDiv = document.createElement('div');
                        repDiv.classList.add('book_rep');
                        let repUp = document.createElement('button');
                        repUp.type = 'button';
                        repUp.innerText = '▲';
                        repUp.addEventListener('click', regiReplace(regiCount, true));
                        let repDown = document.createElement('button');
                        repDown.type = 'button';
                        repDown.innerText = '▼';
                        repDown.addEventListener('click', regiReplace(regiCount, false));
                        repDiv.append(repUp, repDown);

                        let delAnchor = document.createElement('a');
                        delAnchor.href = 'javascript:void(0)';
                        delAnchor.addEventListener('click', bookRegiDelete(regiCount));
                        delAnchor.classList.add('book_delete');
                        let delImg = document.createElement('img');
                        delImg.src = './img/dBox.png';
                        delAnchor.append(delImg);

                        div.prepend(numDiv);
                        div.append(textarea, repDiv, delAnchor);

                        document.getElementById('register_books').appendChild(div);

                        div.scrollIntoView({ behavior: "smooth" });
                        div.removeEventListener('animationend', anim);

                        anim = () => {
                            div.removeEventListener('animationend', anim);
                            div.classList.remove('rTolTAnim');
                        };
                        div.addEventListener('animationend', anim);
                        div.classList.add('rTolTAnim');
                        ++regiCount;
                    };
                    div.addEventListener('animationend', anim);
                    div.classList.add('lTAnim');
                }
            }

            function bookRegiDelete(i) {
                return function(e) {
                    let delNode = document.getElementById('regi_' + i);
                    let id = delNode.querySelector('input').value;
                    delNode.addEventListener('animationend', () => {
                        delNode.remove();
                    });

                    delNode.classList.add('lTAnim');

                    let iIndex = regiOrder.indexOf(i);
                    regiOrder.splice(iIndex, 1);
                    let numClass = '.reg_num';
                    for (let ii = regiOrder.length; iIndex < ii; ++iIndex) {
                        document.getElementById('regi_' + regiOrder[iIndex]).querySelector(numClass).innerText =
                            iIndex + 1;
                    }
                    regiList.splice(regiList.indexOf(id), 1);
                }
            }

            function regiReplace(i, flag) {
                return function(e) {
                    let iS = regiOrder.indexOf(i);
                    if (flag) {
                        if (iS > 0) {
                            let iN = document.getElementById('regi_' + i);
                            let sN = document.getElementById('regi_' + regiOrder[iS - 1]);

                            let numClass = '.reg_num';
                            let iNum = iN.querySelector(numClass);
                            let sNum = sN.querySelector(numClass);
                            iN.prepend(sNum);
                            sN.prepend(iNum);

                            document.getElementById('register_books').insertBefore(iN, sN);
                            [regiOrder[iS], regiOrder[iS - 1]] = [regiOrder[iS - 1], regiOrder[iS]];
                            repAnimation(iN, sN);
                        }
                    } else {
                        if (iS != -1 && iS < regiOrder.length - 1) {
                            let iN = document.getElementById('regi_' + i);
                            let sN = document.getElementById('regi_' + regiOrder[iS + 1]);

                            let numClass = '.reg_num';
                            let iNum = iN.querySelector(numClass);
                            let sNum = sN.querySelector(numClass);
                            iN.prepend(sNum);
                            sN.prepend(iNum);

                            document.getElementById('register_books').insertBefore(sN, iN);
                            [regiOrder[iS], regiOrder[iS + 1]] = [regiOrder[iS + 1], regiOrder[iS]];
                            repAnimation(sN, iN);
                        }
                    }
                }
            }

            function repAnimation(uN, dN) {
                let uElis = () => {
                    uN.classList.remove('repUp');
                    uN.removeEventListener('animationend', uElis);
                };
                let dElis = () => {
                    dN.classList.remove('repDown');
                    dN.removeEventListener('animationend', dElis);
                };
                uN.addEventListener('animationend', uElis);
                dN.addEventListener('animationend', dElis);
                uN.classList.add('repUp');
                dN.classList.add('repDown');
            }

            function submitProcess() {
                if (regiList.length == 0) {
                    alert('最低１つは書籍を登録してください。');
                    return;
                }
                let flag = true;
                let errMsg = '';
                if(errValueCheck(document.querySelector('[name="title"]'),'^.{1,50}$')) {
                    flag = false;
                    errMsg += 'タイトルは１文字以上５０文字以内です。\n';
                }
                if(errValueCheck(document.querySelector('[name="comment"]'),'^[\\s\\S]{0,200}$')){
                flag = false;
                errMsg += 'リストコメントは２００文字以内です。\n';
                }
                if (sGenre < 1) {
                    flag = false;
                    errMsg += 'ジャンルを選択してください。\n';
                }
                if (sTarget < 1) {
                    flag = false;
                    errMsg += 'ターゲットを選択してください。\n';
                }
                const books = document.getElementById('register_books');
                const inputs = books.querySelectorAll('input');
                const textareas = books.querySelectorAll('textarea');
                let areaErr = false;
                for (let i = 0, len = inputs.length; i < len && i < 10; ++i) {
                    inputs[i].name = 'id_' + i;
                    textareas[i].name = 'ta_' + i;
                    if(errValueCheck(textareas[i],'^[\\s\\S]{0,200}$')) {
                        flag = false;
                        areaErr = true;
                    }
                }
                if (areaErr) {
                    errMsg += '書籍コメントにエラーがあります。200文字以内です。';
                }
                if (flag) {
                    books.append(createPostData('genre', sGenre), createPostData('target', sTarget));
                    document.registForm.submit();
                } else {
                    document.querySelector('.text-danger').innerText = errMsg;
                }
            }

            function createPostData(name, value) {
                const input = document.createElement('input');
                input.type = "hidden";
                input.name = name;
                input.value = value;
                return input;
            }

            function errValueCheck(node, pattern) {
                if (node.value.match(pattern)) {
                    node.classList.remove('is-invalid');
                    return false;
                }
                node.classList.add('is-invalid');
                return true;
            }

            function open_book_search() {
                const search_book = document.getElementById('search_book');
                let anim = () => {
                    search_book.removeEventListener('animationend', anim);
                    search_book.classList.remove('rTolTAnim');
                };
                search_book.addEventListener('animationend', anim);
                search_book.classList.add('sb_show_flex', 'rTolTAnim');
            }

            function back_regi() {
                const search_book = document.getElementById('search_book');
                let anim = () => {
                    search_book.removeEventListener('animationend', anim);
                    search_book.classList.remove('lTAnim', 'sb_show_flex');
                };
                search_book.addEventListener('animationend', anim);
                search_book.classList.add('lTAnim');
            }


            //画面サイズ変更時処理＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

            const DISPLAY_JUD_SIZE = 800;
            let displaySwitch = true;
            window.addEventListener('DOMContentLoaded', function() {
                displaySwitch = window.innerWidth > DISPLAY_JUD_SIZE;
                if (!displaySwitch) {
                    resizeMaxProcess();
                }

            });

            window.addEventListener('resize', function() {
                let wid = window.innerWidth;
                if (displaySwitch) {
                    if (wid <= DISPLAY_JUD_SIZE) {
                        resizeMaxProcess();
                        displaySwitch = false;
                    }
                } else {
                    if (wid > DISPLAY_JUD_SIZE) {
                        resizeMinProcess();
                        displaySwitch = true;
                    }
                }
            });

            function resizeMaxProcess() {
                document.getElementById('search_book').classList.add('sb_hidden');
                document.getElementById('open_search').classList.add('sb_show_block');
                document.getElementById('return_regi').classList.add('sb_show_block');
                document.querySelector('[name="registForm"]').classList.add('sb_hidden_reg');
            }


            function resizeMinProcess() {
                document.getElementById('search_book').classList.remove('sb_hidden', 'sb_show_flex');
                document.getElementById('open_search').classList.remove('sb_show_block');
                document.getElementById('return_regi').classList.remove('sb_show_block');
                document.querySelector('[name="registForm"]').classList.remove('sb_hidden_reg');
            }
        <?php echo '</script'; ?>
>
    
</body>

</html><?php }
}
