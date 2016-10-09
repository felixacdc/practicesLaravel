<script src="{{ url('js/vue.js') }}"></script>

<script>
	(function(myVue, allUsers) {
		new myVue({
			el: 'body',
			data: {
				users: allUsers
			}
		});
	})(Vue, users)
</script>