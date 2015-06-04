<style>
    .tree ul {
        list-style: none outside none;
    }
    .tree li a {
        line-height: 25px;
    }
    .tree > ul > li > a {
        color: #3B4C56;
        display: block;
        font-weight: normal;
        position: relative;
        text-decoration: none;
    }
    .tree li.parent > a {
        padding: 0 0 0 28px;
    }
    .tree li.parent > a:before {
        background-image: url("../images/plus_minus_icons.png");
        background-position: 25px center;
        content: "";
        display: block;
        height: 21px;
        left: 0;
        position: absolute;
        top: 2px;
        vertical-align: middle;
        width: 23px;
    }
    .tree ul li.active > a:before {
        background-position: 0 center;
    }
    .tree ul li ul {
        border-left: 1px solid #D9DADB;
        display: none;
        margin: 0 0 0 12px;
        overflow: hidden;
        padding: 0 0 0 25px;
    }
    .tree ul li ul li {
        position: relative;
    }
    .tree ul li ul li:before {
        border-bottom: 1px dashed #E2E2E3;
        content: "";
        left: -20px;
        position: absolute;
        top: 12px;
        width: 15px;
    }
</style>
<div class="row-fluid">
    <div class="span12">
        <div class="box gradient">

            <div class="title">
                <h4>
                    <span>Catalogo de cuentas contables</span>
                </h4>
            </div>
            <div class="content noPad clearfix">
                <div class="tree">
                    <?php
                    $cuentas->getCuentasParentsTree(0,' ','','',1);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>