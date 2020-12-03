<?php
$user = [
  'name' => '勇者',
  'ad' => '普通攻擊',
  'ap' => '魔法攻擊',
  'run' => '逃跑',
];

$monsters = [
    'Slime', // 史萊姆
    'Werewolf', // 狼人
    'Mothra', // 摩斯拉
    'Medusa', // 梅杜莎
    'Dracula', // 德古拉
];

// 使用 foreach 迴圈 遭遇所有的 monster ,
// 1.遇到 Slime(史萊姆) 時 使用普通攻擊,
// 2.遇到 Werewolf(狼人) 時 使用魔法攻擊,
// 3.遇到 Mothra(摩斯拉) 時 逃跑,
// 4.遇到 Medusa(梅杜莎) 時 使用魔法攻擊,
// 5.遇到 Dracula(德古拉) 時 使用逃跑,

// 顯示文字如下
// 第1回合: 勇者遇到 Slime 使用普通攻擊,
// 第2回合: 勇者遇到 Werewolf 使用魔法攻擊,
// 第3回合: 勇者遇到 Mothra 使用逃跑,
// 第4回合: 勇者遇到 Medusa 使用魔法攻擊,
// 第5回合: 勇者遇到 Dracula 使用逃跑,
