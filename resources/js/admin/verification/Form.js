import AppForm from '../app-components/Form/AppForm';

Vue.component('verification-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                admin_users:  '' ,
                password:  '' ,
                
            }
        }
    }

});