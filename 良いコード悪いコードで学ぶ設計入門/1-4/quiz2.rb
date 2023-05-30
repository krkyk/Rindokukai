class Dog
  attr_accessor :name, :breed

  def initialize(name, breed)
    @name = name
    @breed = breed #犬種
  end

  def change_name(new_name)
    @name = new_name
    @breed = 'ゴールデンレトリバー'
  end
end

small_dog = Dog.new('ぽち', 'チワワ')
small_dog.change_name('はなこ')

p small_dog