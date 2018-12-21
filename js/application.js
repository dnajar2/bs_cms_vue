let vm = new Vue({
    el:'#app',
    data:{
        test:'Test message from Vue',
        members:[],
        page:null,
    },
    mounted(){
        document.onreadystatechange = () => {
            if (document.readyState === "complete") {
                if(this.page === 'users'){
                    this.getAllMembers();
                }

            }
        }

    },
    methods:{

        getAllMembers:function(){
            let _self = this;
            $.post({
                url:'./api/getMembers.php',
                data: {
                    'request_type':'get_members'
                }
            })
            .always(function(){
                _self.members = [];
            })
            .done(function (data) {
                let res = JSON.parse(data);
                if(res.status){
                    _self.members = res.data;
                }
            })
        }
    }
});