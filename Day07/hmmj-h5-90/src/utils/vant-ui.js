import Vue from 'vue'
// 全部导入
// import Vant from 'vant'
// import 'vant/lib/index.css'
// Vue.use(Vant)

// 按需导入
import { Button, Rate, NavBar } from 'vant';
// import 'vant/lib/button/style';
// import 'vant/lib/rate/style';
// import 'vant/lib/nav-bar/style';
Vue.use(Button);
Vue.use(Rate);
Vue.use(NavBar);

import { Tabbar, TabbarItem } from 'vant';
// import 'vant/lib/tabbar/style';
// import 'vant/lib/tabbar-item/style';
Vue.use(Tabbar);
Vue.use(TabbarItem);

import { Form } from 'vant';
import { Field } from 'vant';
Vue.use(Form);
Vue.use(Field);

import { Toast } from 'vant';
Vue.use(Toast);

import { Cell, CellGroup } from 'vant';
Vue.use(Cell);
Vue.use(CellGroup);

import { List } from 'vant';
Vue.use(List);

import { PullRefresh } from 'vant';
Vue.use(PullRefresh);

import { Icon } from 'vant';
Vue.use(Icon);

import { Grid, GridItem } from 'vant';
Vue.use(Grid);
Vue.use(GridItem);