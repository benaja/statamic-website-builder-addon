import SelectColors from './components/SelectColors.vue';


Statamic.booting(() => {
    Statamic.$components.register('select-colors', SelectColors);
});
