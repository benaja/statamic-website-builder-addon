import MyComponent from './MyComponent.vue';

console.log('register-components.js 123123');

Statamic.booting(() => {
    console.log('statamic booting');
    Statamic.$components.register('my-component', MyComponent);
});
