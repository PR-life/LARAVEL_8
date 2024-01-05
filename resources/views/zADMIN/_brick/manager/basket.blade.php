<form class="-delete / flex cI / v-Lite -off" action="{{ route('admin.'.mb_strtolower($class).'.delete', $id) }}" method="POST">
	@csrf
	@method('DELETE')
	<button class="Ico -S orb-s / contentBox transparent pointer" type="submit">
		@svg('basket')
	</button>
</form>