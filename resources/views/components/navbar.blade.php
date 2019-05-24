<m-top-app-bar title="{{ config('app.name', 'Laravel') }}" scroll-target='#main-content' dense fixed>
  <template #action-item='{ bindings }'>
    <m-icon-button graphic='help' label='Help' v-bind='bindings'></m-icon-button>
    <m-icon-button graphic='notifications' label='Notifications' v-bind='bindings'></m-icon-button>
    <m-icon-button graphic='more_vert' label='More' v-bind='bindings'></m-icon-button>

    <x-dropdown>
      <template #anchor='{ bindings: anchor }'>
        <m-icon-button graphic='person' label='User' v-bind='bindings' @click='anchor.click'></m-icon-button>
      </template>
      <template #default>
        <m-list role='menu' aria-hidden='true' aria-orientation='vertical'>
          <m-list-item role='menuitem' text='Profile'></m-list-item>
          <m-list-item role='menuitem' text='Settings'></m-list-item>
          <m-list-divider></m-list-divider>
          <m-list-item role='menuitem' text='Add space before paragraph'></m-list-item>
          <a v-list-item href='/logout' role='menuitem'>{{ __('Logout') }}</a>
        </m-list>
      </template>
    </x-dropdown>
  </template>
</m-top-app-bar>
