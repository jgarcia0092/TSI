<template>
    <div class="number-input-container d-flex">
        <div class="btn-minus noselect" v-on:click="decrease">-</div>
        <input type="number" class="value-container" v-model.number="inputValue">
        <div class="btn-plus noselect" v-on:click="increase">+</div>
    </div>
</template>

<script src="./number-input.js"></script>

<style lang="scss">
    @import './number-input.scss';
</style>
