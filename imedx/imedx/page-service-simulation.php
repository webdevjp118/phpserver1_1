<?
/**
 * Template Name: サービス - 簡易収益シミュレーション
 */
?>
<link rel="stylesheet" type="text/css" href="./../service/style.css">
<?php get_template_part('templates/service-head'); ?>
<?php get_template_part('templates/service-header'); ?>
<div class="p-mv-page">
    <div class="l-wrap p-mv-page__inner">
        <p class="mv-page__en">SIMULATION</p>
        <h1 class="mv-page__ja">簡易収益シミュレーション</h1>
    </div>
</div>
<div class="aioseo-breadcrumbs">
    <span class="aioseo-breadcrumb">
        <a href="<?php echo get_site_url(); ?>/service" title="iMedX 生活習慣病DX">iMedX 生活習慣病DX</a>
    </span>
    <span class="aioseo-breadcrumb-separator">›</span>
    <span class="aioseo-breadcrumb">料金シミュレーション</span>
</div>
<div id="simulate" class="l-section__page">
    <div class="l-wrap p-simulation">
        <p class="u-text__sentence">以下の項目に関し、先生のクリニックが最も近い回答をお選びください<br class="pc-only">平均的なデータをもとに、クリニック収益の簡易的なシミュレーションを行います</p>
        <div class="p-simulation__wrap">
            <div class="p-simulation__box">
                <p class="simulation-label is_simlulation">施設タイプ</p>
                <div class="simulation-input">
                    <p class="simulation-input-checkbox">
                        <!-- <input type="radio" name="type" id="type1" value="type1"> -->
                        <input type="radio" v-model="facilityType" id="type1" value="type1">
                        <label for="type1">糖尿病専門クリニック</label>
                    </p>
                    <p class="simulation-input-checkbox">
                        <!-- <input type="radio" name="type" id="type2" value="type2"> -->
                        <input type="radio" v-model="facilityType" id="type2" value="type2">
                        <label for="type2">一般内科クリニック</label>
                    </p>
                    <!-- <p class="simulation-input-checkbox">
                        <input type="radio" name="type" id="type3" value="type3">
                        <label for="type3">その他</label>
                    </p> -->
                </div>
            </div>
            <div class="p-simulation__box">
                <p class="simulation-label is_simlulation">月間の平均患者数</p>
                <div class="simulation-input is_small">
                    <!-- <select>
                        <option value="">300人未満</option>
                        <option value="">300-499人</option>
                        <option value="">500-699人</option>
                        <option value="">700人以上</option>
                    </select> -->
                    <!-- <integer-string-only-input
                        :value="patients"
                        @input="patients = $event"
                    ></integer-string-only-input> -->
                    <input
                        type="text"
                        v-model="patients"
                        placeholder="半角数字のみ">
                </div>
            </div>
            <!-- <div class="p-simulation__box">
                <p class="simulation-label is_simlulation">生活習慣病患者比率</p>
                <div class="simulation-input select">
                    <select>
                        <option value="">1割未満</option>
                        <option value="">2-3割程度</option>
                        <option value="">3-4割程度</option>
                        <option value="">5割</option>
                        <option value="">6-7割</option>
                        <option value="">8割以上</option>
                    </select>
                </div>
            </div> -->
            <button class="c-btn-simulation" @click="calculateIncome">診断</button>
            <p class="p-simulation__result">診療報酬は1年あたり約<span id="result" class="u-weight__big u-weight__bold">{{ currencyDisplay }}</span>円増加します</p>
            <p class="u-text u-text__sentence u-text__center u-mb1em">※実際の収益は、諸条件によって異なりますので、あくまで目安としてご利用ください。</p>
            <p class="u-text u-text__sentence u-text__center">貴院についての具体的なシミュレーションは<br class="sp-only">当社スタッフが説明します</p>
            <a href="<?php echo get_site_url(); ?>/service/contact" class="c-btn-link c-btn-arrow u-mt2em">料金についてはこちら</a>
        </div>
    </div>
</div>
<?php get_template_part('templates/service-cta'); ?>
<?php get_template_part('templates/service-footer'); ?>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script>
        new Vue({
            el: '#simulate',
            data: {
                type1: 8387.2,
                type2: 7628.6,
                facilityType: 'type1',
                patients: '',
                result: 0
            },
            methods: {
                checkInput: function() {
                    // Remove all non-digit characters
                    this.patients = this.patients.replace(/\D/g, '');
                },
                calculateIncome: function() {
                    this.checkInput();
                    if (this.facilityType === 'type1') {
                        this.result = this.patients * this.type1;
                    } else if (this.facilityType === 'type2') {
                        this.result = this.patients * this.type2;
                    } else {
                        this.result = 0;
                    }
                }
            },
            computed: {
                currencyDisplay: function() {
                    if (!this.result) {
                        return '0';
                    }
                    return this.result.toLocaleString();
                }
            }
        });
    </script>
</body>
</html>