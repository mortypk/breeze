<div x-data="{ open: 't1' }">
<ul class="-mb-px flex flex-wrap border-b border-gray-200 text-center text-sm font-medium" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
    <li @click="open ='t1'" class="inline-block cursor-pointer hover:border-y-1 border-y-2 border-y-gray-50 p-3 hover:border-b-blue-300 hover:bg-gray-100 hover:text-gray-700 hover:shadow-inner hover:shadow-gray-300 active:border-b-blue-600 active:shadow-inner active:shadow-gray-300"
    x-bind:class="{'border-b-blue-600 bg-gray-100 shadow-inner' : open == 't1'}">
    Home
    </li>
    <li @click="open ='t2'" class="inline-block cursor-pointer hover:border-y-1 border-y-2 border-y-gray-50 p-3 hover:border-b-blue-300 hover:bg-gray-100 hover:text-gray-700 hover:shadow-inner hover:shadow-gray-300 active:border-b-blue-600 active:shadow-inner active:shadow-gray-300"
    x-bind:class="{'border-b-blue-600 bg-gray-100 shadow-inner' : open == 't2'}">
    Dashboard
    </li>
    <li @click="open ='t3'" class="inline-block cursor-pointer hover:border-y-1 border-y-2 border-y-gray-50 p-3 hover:border-b-blue-300 hover:bg-gray-100 hover:text-gray-700 hover:shadow-inner hover:shadow-gray-300 active:border-b-blue-600 active:shadow-inner active:shadow-gray-300"
    x-bind:class="{'border-b-blue-600 bg-gray-100 shadow-inner' : open == 't3'}">
    Settings
    </li>
    <li @click="open ='t4'" class="inline-block cursor-pointer hover:border-y-1 border-y-2 border-y-gray-50 p-3 hover:border-b-blue-300 hover:bg-gray-100 hover:text-gray-700 hover:shadow-inner hover:shadow-gray-300 active:border-b-blue-600 active:shadow-inner active:shadow-gray-300"
    x-bind:class="{'border-b-blue-600 bg-gray-100 shadow-inner' : open == 't4'}">
    Contacts
    </li>
</ul>
<div id="myTabContent">
    <div x-show="open === 't1'" class="rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <p class="text-sm text-gray-500 dark:text-gray-400">1 This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div x-show="open === 't2'" class="rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
    <p class="text-sm text-gray-500 dark:text-gray-400">2 This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div x-show="open === 't3'" class="rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
    <p class="text-sm text-gray-500 dark:text-gray-400">3 This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div x-show="open === 't4'" class="rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
    <p class="text-sm text-gray-500 dark:text-gray-400">4 This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
</div>
</div>