class Monster
  attr_accessor :hitpoint, :name

  def initialize(name, hitpoint)
    @name = name
    @hitpoint = hitpoint
  end
end

class HitPoint
  attr_accessor :hitpoint

  def initialize
    @point = 100
  end
end

# Monster を HitPoint を使って初期化する例
hitpoint = HitPoint.new(100)
weak_monster = Monster.new("Goblin", hitpoint.point)
strong_monster = Monster.new("Gliffon", hitpoint.point)

puts strong_monster