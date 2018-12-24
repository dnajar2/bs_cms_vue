let vm = new Vue({
    el:'#app',
    data:{
        test:'Test message from Vue',
        members:[],
        member:[],
        page:null,
        userId:null,
        total:0,
    },
    mounted(){
        document.onreadystatechange = () => {
            if (document.readyState === "complete") {
                if(this.page === 'users'){
                    this.getAllMembers();
                }else if(this.page === "edit"){
                    this.getMember(this.userId)
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
        },
        getMember:function(userId){
            let self = this;
            if(userId === self.userId){
                $.post({
                    url: './api/getMembers.php',
                    data:{
                        'request_type':'get_member',
                        'member_id':userId
                    }
                })
                .always(function () {
                    self.member=[];
                })
                .done(function (data) {
                    let res = JSON.parse(data);
                    if(res.status){
                        self.member = res.data
                    }
                })

            }

        },
        incrementTotal:function () {
            this.total++;
        }
    }
});