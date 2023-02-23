# -*- coding: utf-8 -*-

# import pandas as pd
from itertools import chain

api_get_data = [
  {
    "id": 1,
    "名前": "東京テストレジデンスマンション",
    "都道府県": "東京都",
  },
  {
    "id": 2,
    "名前": "ライオンズテストマンション神奈川",
    "都道府県": "神奈川県",
    "バルコニー面積": "70"
  },
  {
    "id": 3,
    "名前": "テストタワー茨城",
  }
]



class api_data:
  def __init__(self, data_list):
    self.data_list = data_list
    self.df = self.transform_to_df()

  def get_unique_keys_list(self):
    # キーをタプル抽出 -> <map object ('id', '名前', '都道府県'), ('id', '名前', '都道府県', 'バルコニー面積'), ('id', '名前') >
    extraction_key_tuple_map = map(lambda dict_data: tuple(dict_data.keys()), self.data_list)

    # 重複タプル除外リストの作成 -> 同一タプルが存在する場合1つだけ残す
    unique_tuple_set = set(extraction_key_tuple_map)
    unique_tuple_list = list(unique_tuple_set)

    # タプルをリストに変換 -> [['id', '名前', '都道府県'], ['id', '名前', '都道府県', 'バルコニー面積'], ['id', '名前']]
    unique_extraction_key_map = map(lambda unique_tuple_data: list(unique_tuple_data), unique_tuple_list)
    unique_extraction_key_list = list(unique_extraction_key_map)

    # 平坦化 -> ['id', '名前', '都道府県', 'バルコニー面積', 'id', '名前', 'id', '名前', '都道府県']
    extraction_key_list = list(chain.from_iterable(unique_extraction_key_list))

    # 重複キー抽出 -> ['名前', 'id', 'バルコニー面積', '都道府県']
    unique_keys_set = set(extraction_key_list)
    unique_keys_list = list(unique_keys_set)

    return unique_keys_list

  def transform_to_df(self):
    unique_keys_list = self.get_unique_keys_list()

    # 新規データの格納
    data_set = {}
    for key in unique_keys_list:
        target_value_list = map(lambda data: data[key] if key in data else None, self.data_list)
        data_set[key] = list(target_value_list)

    # DataFrameへ変形
    # df = pd.DataFrame(data_set)
    return df

api_data_instance = api_data(api_get_data)
df = api_data_instance.df