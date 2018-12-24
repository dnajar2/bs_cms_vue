Vue.component('users-table',{
   template:`
    <button v-on:click="alertParent">Count!</button>
   `,
    methods:{
       alertParent:function(){
           this.$emit('increment');
       }
    }
});