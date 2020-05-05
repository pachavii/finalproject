<template>
	<div class="container">
		<div  class="content">
		<form style="align:center;" action="/subagent">
		<table  style="margin-top:20px !important;margin-left:5% !important;" align="center" border="1" class="table table-bordered">
			<tr style="font-size:35px; font-weight: bold;">
				<th>วันที่</th>
				<th>ชื่อซับเอเย่นต์</th>
				<th>รายการ</th>
				<th>ราคา</th>
			</tr>
			<tr style="font-size:30px;" v-for= "(b,index) in returnlists" :key="b.id">
				<td>{{ b.created_at }}</td>
				<td>{{ b.subagent.name }}</td>
				<td>{{ b.subagent.member_id }}-{{ b.created_at }}</td>
				<td>{{ b.total }}</td>
				<td>

				<a :href="'/returnlistdata/'+b.id" class="btn4">ดูข้อมูล</a>
				<a href="javascript:;" class="btn2 btn-warning" v-on:click="deletereturnlist(b.id,index)"><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
		</table>
		<button type="submit" class="btn1">back</button>
		</form>
		</div>

	</div>
</template>

<script>
	export default{
		mounted(){
			this.getreturnlistdata();
		},
		methods:{
			getreturnlistdata(){
				axios.get('api/returnlist').then(response=>{
					this.returnlists=response.data;
				});
			},
			deletereturnlist(id,index){
				axios.get('api/deletereturnlist/'+id).then(response=>{
					this.returnlists.splice(index,1);
				});
			}
		},
		data(){
			return {
				returnlists:[],
				returnlist:{
					id:0,
					subagent_id:0,
					total:0,
					created_at:''
				},
				hasError: true
			}
		}
	}
</script>