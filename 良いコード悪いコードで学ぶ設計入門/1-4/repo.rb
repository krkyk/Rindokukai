class Repository
  def initialize
    @data = []  # データの初期化
  end

  def all
    @data  # データ全体を取得するメソッド
  end

  def find(id)
    @data.find { |item| item.id == id }  # 指定したIDのデータを取得するメソッド
  end

  def save(item)
    @data << item  # データを保存するメソッド
  end

  def delete(item)
    @data.delete(item)  # データを削除するメソッド
  end
end

class User
  attr_reader :id, :name, :email

  def initialize(id, name, email)
    @id = id
    @name = name
    @email = email
  end
end

class UserRepository < Repository
  def find_by_email(email)
    @data.find { |user| user.email == email }  # 指定したEmailのユーザーを取得するメソッド
  end
end