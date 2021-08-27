<template>
  
  <b-container>
        <b-row>
            <b-col cols="2"></b-col>
            <b-col cols="8">
                <b-card class="bg-royalblue">
                    <b-row>
                        <b-col cols="6" class="text-white">
                            
                                <Icon type="ios-arrow-back" />
                               Reset Nickname </div>
                        </b-col>
                        <b-col cols="6"></b-col>
                    </b-row>
                    <div class="mt-3">
                         <Form :model="formRight" label-position="top" >
                        <FormItem label="Nickname">
                            <Input v-model="name" placeholder="Please Enter"></Input>
                        </FormItem>
                       
                        <div class="text-right">
                        <Button type="success" size="large" @click="reset"> Save</Button>
                        </div>
                        </Form>
                    </div>
                    </b-card>
                    </b-col></b-row>
                     
                    </b-container>

</template>

<script>
export default {
data(){
    return{
        user_id:"",
        name:"",
    }
},
created() {
        axios
            .get("../../../api/profile", {
                headers: {
                    Authorization: `Bearer ${localStorage.usertoken}`
                }
            })
            .then(res => {
                if (res.data[0] == "token_expired") {
                    this.auth = "";
                    this.$router.push("/login");
                }
                // this.balance = res.data.balance;
                this.user_id = res.data.user.id;
                this.name=res.data.user.name;
            })
            .catch(err => {
                console.log(err);
            });
    },
    methods:{
reset(){
        axios.post("../../../api/resetname/"+this.user_id,{
            name:this.name
        }).then(res=>{console.log(res);
        this.s("name reset successfully");}).catch(err=>{
            this.i(err.response.data.message);
        })
}
}
}
</script>

<style>
.ivu-form-label-top >div>div>div> input{
background-color: black ;
color:white;
border:1px solid black
}
</style>