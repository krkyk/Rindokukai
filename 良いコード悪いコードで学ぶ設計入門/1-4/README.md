輪読会3周目 4章「良いコード悪いコードで学ぶ設計入門」
担当![image](yuki82511988.icon)

参加者

意気込み：
参加するぞ〜〜〜![image](yuki82511988.icon)


Quiz1
code:quiz1.rb
  - class Monster
      - attr_accessor :hitpoint, :name
  - 
      - def initialize(name, hitpoint)
          - @name = name
          - @hitpoint = hitpoint
      - end
  - end
  - 
  - class HitPoint
      - attr_accessor :hitpoint
  - 
      - def initialize
          - @point = 100
      - end
  - end
  - 
  - # Monster を HitPoint を使って初期化する例
  - hitpoint = HitPoint.new(100)
  - weak_monster = Monster.new("Goblin", hitpoint.point)
  - strong_monster = Monster.new("Gliffon", hitpoint.point)
  - 
  - puts strong_monster

# 何が出力されるでしょう

  - @pointを変えると...

# どうすれば良いかお話

  - この章パターン
  - 復習パターン

Quiz2
code: quiz2.rb
  - class Dog
      - attr_accessor :name, :breed
  - 
      - def initialize(name, breed)
          - @name = name
          - @breed = breed #犬種
      - end
  - 
      - def change_name(new_name)
          - @name = new_name
          - @breed = 'ゴールデンレトリバー'
      - end
  - end
  - 
  - @small_dog = Dog.new('ぽち', 'チワワ)
  - @small_dog.change_name('はなこ')
  - 
  - p @small_dog
# 何が起きるでしょう

# どうすれば良いかお話

📝
  - デフォルトは不変に
  - 値変更はミューテターを。Rubyのattr_accessor、attr_writerのこと

📝
# 局所化
リポジトリパターン
code: ruby
  - class Repository
      - def initialize
          - @data = []  # データの初期化
      - end
  - 
      - def all
          - @data  # データ全体を取得するメソッド
      - end
  - 
      - def find(id)
          - @data.find { |item| item.id == id }  # 指定したIDのデータを取得するメソッド
      - end
  - 
      - def save(item)
          - @data << item  # データを保存するメソッド
      - end
  - 
      - def delete(item)
          - @data.delete(item)  # データを削除するメソッド
      - end
  - end
  - 
  - class User
      - attr_reader :id, :name, :email
  - 
      - def initialize(id, name, email)
          - @id = id
          - @name = name
          - @email = email
      - end
  - end
  - 
  - class UserRepository < Repository
      - def find_by_email(email)
          - @data.find { |user| user.email == email }  # 指定したEmailのユーザーを取得するメソッド
      - end
  - end
  - 
# 何がいいのでしょう

◯◯◯を探す際、◯◯◯で探しているように見える。Repository内部的には◯◯◯で探しているが、それはカプセル化されているので気にしなくていい。◯◯◯で探すようにしても変わらないですね。

hint
カプセル化とは、オブジェクト指向プログラミングにおいて、互いに関連するデータの集合とそれらに対する操作をオブジェクトとして一つの単位にまとめ、外部に対して必要な情報や手続きのみを提供すること。外から直に参照や操作をする必要のない内部の状態や構造は秘匿される。

十分にカプセル化されたオブジェクトを組み合わせてプログラムを構築していくことにより、オブジェクトの内部の仕様の変更が外部に予期せぬ影響を及ぼしたり、外部からの予期せぬ干渉でオブジェクトの状態が壊されることを防ぐことができるようになる。

カプセル化とは - 意味をわかりやすく - IT用語辞典 e-Words 
https://e-words.jp/w/%E3%82%AB%E3%83%97%E3%82%BB%E3%83%AB%E5%8C%96.html

#輪読会
