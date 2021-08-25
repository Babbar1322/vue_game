<template>
  
  <b-container>
        <b-row>
            <b-col cols="2"></b-col>
            <b-col cols="8">
                <b-card class="bg-royalblue">
                    <b-row>
                        <b-col cols="6" class="text-white">
                            
                                <Icon type="ios-arrow-back" />
                               Reset Password </div>
                        </b-col>
                        <b-col cols="6"></b-col>
                    </b-row>
                    <div class="mt-3">
                         <Form :model="formRight" label-position="top" >
                        <FormItem label="Old Password">
                            <Input v-model="data" placeholder="Please Enter"></Input>
                        </FormItem>
                        <FormItem label="New Password">
                            <Input v-model="data" placeholder="Please Enter"></Input>
                        </FormItem>
                        <FormItem label="Confirm Password">
                            <Input v-model="data" placeholder="Please Enter"></Input>
                        </FormItem>
                        <div class="text-right">
                        <Button type="success" size="large" > Save</Button>
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
        data:""
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